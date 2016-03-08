/**
 * Upload handler helper
 *
 * @param string {browse_button} browse_button ID of the pickfile
 * @param string {container} container ID of the wrapper
 * @param int {max} maximum number of file uplaods
 * @param string {type}
 */
var give_ffm_frontend;

(function ( $ ) {

	window.Give_FFM_Uploader = function ( browse_button, container, max, type, allowed_type, max_file_size ) {
		this.container = container;
		this.browse_button = browse_button;
		this.max = max || 1;
		this.count = $( '#' + container ).find( '.ffm-attachment-list > li' ).length; //count how many items are there
console.log(give_ffm_frontend);
		//if no element found on the page, bail out
		if ( !$( '#' + browse_button ).length ) {
			return;
		}

		//instantiate the uploader
		this.uploader = new plupload.Uploader( {
			runtimes        : 'html5,html4',
			browse_button   : browse_button,
			container       : container,
			multipart       : true,
			multipart_params: {
				action: 'ffm_file_upload'
			},
			multiple_queues : false,
			multi_selection : false,
			urlstream_upload: true,
			file_data_name  : 'ffm_file',
			max_file_size   : max_file_size + 'kb',
			url             : give_ffm_frontend.plupload.url + '&type=' + type,
			flash_swf_url   : give_ffm_frontend.flash_swf_url,
			filters         : [{
				title     : 'Allowed Files',
				extensions: allowed_type
			}]
		} );

		//attach event handlers
		this.uploader.bind( 'Init', $.proxy( this, 'init' ) );
		this.uploader.bind( 'FilesAdded', $.proxy( this, 'added' ) );
		this.uploader.bind( 'QueueChanged', $.proxy( this, 'upload' ) );
		this.uploader.bind( 'UploadProgress', $.proxy( this, 'progress' ) );
		this.uploader.bind( 'Error', $.proxy( this, 'error' ) );
		this.uploader.bind( 'FileUploaded', $.proxy( this, 'uploaded' ) );

		this.uploader.init();

		$( '#' + container ).on( 'click', 'a.attachment-delete', $.proxy( this.removeAttachment, this ) );
	};

	Give_FFM_Uploader.prototype = {

		init: function ( up, params ) {
			this.showHide();
		},

		showHide: function () {

			if ( this.count >= this.max ) {

				$( '#' + this.container ).find( '.file-selector' ).hide();

				return;
			}

			$( '#' + this.container ).find( '.file-selector' ).show();
		},

		added: function ( up, files ) {
			var $container = $( '#' + this.container ).find( '.ffm-attachment-upload-filelist' );

			this.count += 1;
			this.showHide();

			$.each( files, function ( i, file ) {
				$container.append(
					'<div class="upload-item" id="' + file.id + '"><div class="progress progress-striped active"><div class="bar"></div></div><div class="filename original">' +
					file.name + ' (' + plupload.formatSize( file.size ) + ') <b></b>' +
					'</div></div>' );
			} );

			up.refresh(); // Reposition Flash/Silverlight
			up.start();
		},

		upload: function ( uploader ) {
			this.uploader.start();
		},

		progress: function ( up, file ) {
			var item = $( '#' + file.id );

			$( '.bar', item ).css( {width: file.percent + '%'} );
			$( '.percent', item ).html( file.percent + '%' );
		},

		error: function ( up, error ) {
			$( '#' + this.container ).find( '#' + error.file.id ).remove();
			alert( 'Error #' + error.code + ': ' + error.message );

			this.count -= 1;
			this.showHide();
			this.uploader.refresh();
		},

		uploaded: function ( up, file, response ) {
			 //var res = $.parseJSON(response);
			 //console.log( typeof response, typeof response.response);
			 //console.log(response, response.response);

			$( '#' + file.id + " b" ).html( "100%" );
			$( '#' + file.id ).remove();

			if ( response.response !== 'error' ) {
				var $container = $( '#' + this.container ).find( '.ffm-attachment-list' );
				$container.append( response.response );
			} else {
				alert( res.error );
				this.count -= 1;
				this.showHide();
			}
		},

		removeAttachment: function ( e ) {
			e.preventDefault();

			var self = this,
				el = $( e.currentTarget );

			if ( confirm( give_ffm_frontend.confirmMsg ) ) {
				var data = {
					'attach_id': el.data( 'attach_id' ),
					'nonce'    : give_ffm_frontend.nonce,
					'action'   : 'ffm_file_del'
				};

				jQuery.post( give_ffm_frontend.ajaxurl, data, function () {
					el.parent().parent().remove();

					self.count -= 1;
					self.showHide();
					self.uploader.refresh();
				} );
			}
		}
	};
})( jQuery );