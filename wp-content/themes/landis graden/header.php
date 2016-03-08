 	<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width" />
		<title><?php bloginfo('name'); ?></title>
		<link rel="stylesheet" media="screen" href="<?php echo get_bloginfo('template_directory');?>/bootstrap.css">
		<link rel="stylesheet" media="screen" href="<?php echo get_bloginfo('template_directory');?>/style.css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,300' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>
	<nav class="navbar navbar-default navbar-fixed-top" style="box-shadow: 1px 1px 2px rgba(113, 113, 113, 0.51);">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header" >
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="col-sm-3" href="<?php echo home_url(); ?>">
		      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 height="60px" style="margin-top: 12px;" viewBox="0 0 436.607 154.5" enable-background="new 0 0 436.607 154.5" xml:space="preserve">
<g>
	<g>
		<path fill="#184798" d="M163.375,8.322h12.277v39.754H198.6v11.401h-35.226V8.322z"/>
		<path fill="#184798" d="M218.474,51l-3.069,8.478H202.47l19.731-51.155h13.959l19.809,51.155h-13.156L239.745,51H218.474z
			 M232.068,29.657c-1.605-4.237-2.777-7.453-2.85-7.524H229c-0.071,0.071-1.242,3.214-2.85,7.455l-3.654,10.232h13.229
			L232.068,29.657z"/>
		<path fill="#184798" d="M273.358,28.928h-0.219c0,0.074,0.147,6.358,0.147,13.008v17.541h-12.279V8.322h12.425l21.779,29.96h0.221
			c0-0.074-0.075-6.649-0.075-12.203V8.322h12.278v51.155H295.14L273.358,28.928z"/>
		<path fill="#184798" d="M337.597,8.322c15.279,0,26.97,10.375,26.97,25.795c0,15.492-11.766,25.36-26.896,25.36h-21.852V8.322
			H337.597z M336.941,48.076c7.599,0,15.276-3.874,15.276-13.959c0-10.012-7.677-14.397-15.276-14.397h-8.842v28.356H336.941z"/>
		<path fill="#184798" d="M370.704,8.322h12.278v51.155h-12.278V8.322z"/>
		<path fill="#184798" d="M400.741,43.548c1.024,3.873,4.604,6.137,10.156,6.137c4.679,0,7.531-1.608,7.531-4.897
			c0-4.898-6.141-4.603-12.427-6.139c-6.941-1.682-15.562-4.896-15.562-15.713c0-10.452,7.891-15.638,19.367-15.638
			c10.446,0,17.904,4.238,20.755,13.372l-11.696,3.145c-1.243-3.729-4.165-5.776-9.281-5.776c-4.677,0-6.649,1.827-6.649,4.531
			c0,4.312,4.896,4.968,12.06,6.433c7.524,1.463,15.857,4.677,15.857,15.713c0,10.524-7.38,15.784-19.878,15.784
			c-8.917,0-19.001-2.704-21.925-13.813L400.741,43.548z"/>
	</g>
	<path fill="#F05E22" d="M196.752,112.564c0-2.536,0.065-2.79,0.065-3.106h-0.128c-2.537,2.153-7.355,3.993-12.49,3.993
		c-12.363,0-22.825-9.317-22.825-23.142c0-13.567,9.765-23.011,23.015-23.011c10.08,0,17.815,5.577,20.668,12.807l-10.524,2.851
		c-1.711-2.851-5.009-5.642-10.651-5.642c-7.165,0-11.792,5.325-11.792,13.059c0,7.861,5.136,12.996,12.996,12.996
		c6.086,0,9.891-2.662,11.286-4.562v-2.092h-11.157v-9.892h21.047v25.742H196.752z"/>
	<path fill="#F05E22" d="M228.007,97.916h-2.218h-2.537v14.649h-10.652V68.187h16.866c11.159,0,17.686,5.831,17.686,15.023
		c0,6.087-2.979,10.588-8.37,12.618l10.147,16.736h-12.618L228.007,97.916z M230.163,89.423c3.931,0,6.085-1.966,6.085-5.704
		c0-3.68-2.027-5.897-6.148-5.897h-6.847v11.601H230.163z"/>
	<path fill="#F05E22" d="M265.475,105.21l-2.663,7.354H251.59l17.116-44.378h12.111l17.182,44.378h-11.412l-2.663-7.354H265.475z
		 M277.267,86.694c-1.395-3.676-2.41-6.464-2.474-6.527h-0.19c-0.062,0.063-1.076,2.789-2.471,6.468l-3.171,8.876h11.478
		L277.267,86.694z"/>
	<path fill="#F05E22" d="M321.266,68.187c13.25,0,23.392,9.001,23.392,22.377c0,13.441-10.204,22.001-23.329,22.001h-18.959V68.187
		H321.266z M320.694,102.673c6.594,0,13.25-3.36,13.25-12.109c0-8.685-6.655-12.489-13.25-12.489h-7.669v24.598H320.694z"/>
	<path fill="#F05E22" d="M349.985,68.187h32.333v9.888h-21.683v7.61h15.977v8.872h-15.977v8.116h22v9.892h-32.65V68.187z"/>
	<path fill="#F05E22" d="M399.562,86.063h-0.191c0,0.062,0.127,5.516,0.127,11.284v15.217h-10.649V68.187h10.776l18.895,25.992
		h0.188c0-0.065-0.061-5.769-0.061-10.587V68.187h10.649v44.378h-10.841L399.562,86.063z"/>
</g>
<g>
	<polygon fill="#58595B" points="171.334,148 164.179,121 168.226,121 173.061,139.814 177.939,121 181.964,121 174.675,148 	"/>
	<path fill="#58595B" d="M165.603,121.61h1.77l5.683,22.115l5.734-22.115h1.743l-6.704,25.21h-1.646L165.603,121.61z"/>
	<path fill="#58595B" d="M199.096,148l-1.92-7h-7.696l-1.993,7h-4.027l8.375-27h3.332l8.075,27H199.096z M195.946,137l-2.543-8.806
		L190.781,137H195.946z"/>
	<path fill="#58595B" d="M192.647,121.61h1.695l7.427,25.21h-1.845l-1.92-6.694h-9.346l-1.993,6.694h-1.721L192.647,121.61z
		 M193.419,124.173l-4.114,13.814h8.104L193.419,124.173z"/>
	<polygon fill="#58595B" points="209,148 209,121 213,121 213,144 221,144 221,148 	"/>
	<path fill="#58595B" d="M210.045,121.61h1.643v23.076h8.225v2.134h-9.868V121.61z"/>
	<polygon fill="#58595B" points="227,148 227,121 231,121 231,144 239,144 239,148 	"/>
	<path fill="#58595B" d="M228.241,121.61h1.644v23.076h8.227v2.134h-9.871V121.61z"/>
	<polygon fill="#58595B" points="245,148 245,121 258,121 258,125 249,125 249,132 258,132 258,136 249,136 249,144 259,144 
		259,148 	"/>
	<path fill="#58595B" d="M246.436,121.61h10.793v2.133h-9.148v8.975h8.575v2.136h-8.575v9.832h9.546v2.134h-11.191V121.61z"/>
	<path fill="#58595B" d="M269.291,148.561c-1.614,0-2.973-0.627-3.932-1.813c-0.875-1.084-1.461-2.523-1.739-4.277l-0.156-0.984
		l3.767-0.984l0.204,1.179c0.441,2.545,1.469,2.545,1.856,2.545c0.361,0,0.645-0.073,0.87-0.224
		c0.259-0.173,0.462-0.407,0.625-0.717c0.197-0.374,0.152-0.833,0.247-1.371c0.108-0.6-0.031-1.23-0.031-1.929V121h4v18.418
		c0,0.767,0.076,1.621-0.003,2.611c-0.083,1.028-0.251,2.015-0.614,2.933c-0.386,0.979-0.945,1.818-1.718,2.49
		C271.821,148.188,270.704,148.561,269.291,148.561z"/>
	<path fill="#58595B" d="M274.129,139.418c0,0.758-0.04,1.594-0.115,2.523c-0.074,0.924-0.274,1.798-0.597,2.617
		c-0.324,0.822-0.808,1.509-1.446,2.063c-0.64,0.558-1.533,0.838-2.681,0.838c-1.294,0-2.321-0.47-3.076-1.404
		c-0.757-0.937-1.26-2.191-1.509-3.758l1.645-0.43c0.399,2.306,1.379,3.458,2.94,3.458c0.583,0,1.078-0.139,1.482-0.41
		c0.409-0.273,0.737-0.644,0.987-1.122c0.25-0.475,0.432-1.042,0.546-1.689c0.118-0.659,0.176-1.36,0.176-2.12V121.61h1.647V139.418
		z"/>
	<path fill="#58595B" d="M292.672,148.561c-1.539,0-2.971-0.379-4.255-1.128c-1.253-0.725-2.342-1.76-3.235-3.075
		c-0.861-1.266-1.541-2.789-2.02-4.526c-0.472-1.708-0.712-3.598-0.712-5.618c0-2.018,0.24-3.902,0.713-5.6
		c0.479-1.725,1.158-3.243,2.019-4.511c0.89-1.304,1.975-2.34,3.227-3.084c1.288-0.763,2.722-1.15,4.264-1.15
		c1.541,0,2.975,0.387,4.263,1.15c1.257,0.747,2.341,1.784,3.226,3.084c0.86,1.269,1.54,2.787,2.021,4.511
		c0.473,1.702,0.712,3.586,0.712,5.601c0,2.017-0.239,3.907-0.711,5.618c-0.482,1.738-1.162,3.26-2.022,4.526
		c-0.888,1.312-1.977,2.348-3.236,3.076C295.642,148.181,294.21,148.561,292.672,148.561z M292.672,124.206
		c-0.952,0-1.777,0.225-2.523,0.687c-0.792,0.49-1.45,1.149-2.013,2.017c-0.579,0.887-1.033,1.963-1.353,3.201
		c-0.323,1.251-0.487,2.631-0.487,4.104c0,1.471,0.164,2.852,0.487,4.105c0.319,1.232,0.774,2.311,1.353,3.205
		c0.559,0.858,1.235,1.536,2.009,2.012c0.749,0.466,1.574,0.691,2.527,0.691c0.952,0,1.777-0.225,2.522-0.688
		c0.783-0.481,1.458-1.158,2.011-2.014c0.579-0.896,1.036-1.975,1.358-3.208c0.321-1.253,0.485-2.635,0.485-4.102
		c0-1.468-0.164-2.85-0.486-4.105c-0.321-1.234-0.777-2.311-1.354-3.197c-0.552-0.856-1.228-1.534-2.012-2.019
		C294.449,124.43,293.623,124.206,292.672,124.206z"/>
	<path fill="#58595B" d="M283.55,134.213c0-1.924,0.223-3.69,0.672-5.305c0.448-1.612,1.071-3.012,1.869-4.188
		c0.799-1.17,1.757-2.09,2.879-2.756c1.121-0.665,2.355-0.996,3.702-0.996c1.345,0,2.581,0.332,3.702,0.996
		c1.122,0.667,2.081,1.586,2.877,2.756c0.797,1.176,1.421,2.576,1.872,4.188c0.448,1.615,0.671,3.381,0.671,5.305
		c0,1.92-0.223,3.7-0.671,5.326c-0.45,1.624-1.075,3.028-1.872,4.201c-0.796,1.176-1.755,2.093-2.877,2.742
		c-1.122,0.653-2.357,0.979-3.702,0.979c-1.347,0-2.581-0.326-3.702-0.979c-1.122-0.649-2.08-1.566-2.879-2.742
		c-0.798-1.173-1.421-2.577-1.869-4.201C283.772,137.913,283.55,136.134,283.55,134.213z M285.195,134.213
		c0,1.571,0.173,3.026,0.522,4.38c0.35,1.353,0.847,2.526,1.495,3.527c0.649,0.998,1.434,1.784,2.357,2.351
		c0.92,0.573,1.955,0.854,3.103,0.854c1.148,0,2.182-0.281,3.104-0.854c0.922-0.567,1.708-1.353,2.354-2.351
		c0.647-1.001,1.146-2.175,1.499-3.527c0.347-1.354,0.521-2.809,0.521-4.38c0-1.564-0.173-3.027-0.521-4.378
		c-0.353-1.357-0.851-2.531-1.499-3.524c-0.646-1.001-1.432-1.783-2.354-2.354c-0.922-0.57-1.955-0.852-3.104-0.852
		c-1.147,0-2.183,0.282-3.103,0.852c-0.923,0.571-1.708,1.353-2.357,2.354c-0.648,0.994-1.145,2.167-1.495,3.524
		C285.368,131.187,285.195,132.649,285.195,134.213z"/>
	<polygon fill="#58595B" points="338,148 338,131.869 333.317,148 330.966,148 326,131.763 326,148 322,148 322,121 326.538,121 
		332.154,139.469 337.769,121 342,121 342,148 	"/>
	<path fill="#58595B" d="M323.254,121.61h2.468l6.432,21.149l6.431-21.149h2.343v25.21h-1.648v-22.221h-0.047l-6.732,22.221h-0.723
		l-6.83-22.221H324.9v22.221h-1.646V121.61z"/>
	<path fill="#58595B" d="M363.179,148l-1.918-7h-7.698l-1.993,7h-4.029l8.373-27h3.333l8.076,27H363.179z M360.029,137l-2.542-8.804
		l-2.62,8.804H360.029z"/>
	<path fill="#58595B" d="M356.728,121.61h1.697l7.428,25.21h-1.845l-1.918-6.694h-9.348l-1.993,6.694h-1.722L356.728,121.61z
		 M357.502,124.173l-4.111,13.814h8.1L357.502,124.173z"/>
	<polygon fill="#58595B" points="375,148 375,136.196 368.012,121 372.4,121 377.03,131.388 381.769,121 386.025,121 379,136.196 
		379,148 	"/>
	<path fill="#58595B" d="M376.195,135.959l-6.479-14.349h1.97l5.332,11.964l5.458-11.964h1.846l-6.48,14.349v10.861h-1.646V135.959z
		"/>
	<path fill="#58595B" d="M400.3,148.561c-1.54,0-2.972-0.38-4.254-1.128c-1.258-0.726-2.349-1.762-3.238-3.076
		c-0.854-1.253-1.535-2.776-2.02-4.522c-0.472-1.711-0.711-3.602-0.711-5.62c0-2.016,0.239-3.9,0.711-5.599
		c0.486-1.736,1.166-3.253,2.021-4.512c0.885-1.3,1.971-2.338,3.229-3.084c1.284-0.763,2.718-1.15,4.261-1.15
		c1.539,0,2.972,0.387,4.26,1.15c1.252,0.743,2.337,1.78,3.227,3.082c0.864,1.277,1.543,2.794,2.021,4.514
		c0.473,1.707,0.712,3.59,0.712,5.599c0,2.011-0.239,3.901-0.711,5.617c-0.478,1.733-1.158,3.256-2.021,4.527
		c-0.895,1.316-1.984,2.352-3.239,3.077C403.267,148.181,401.835,148.561,400.3,148.561z M400.3,124.206
		c-0.952,0-1.779,0.225-2.529,0.688c-0.787,0.489-1.445,1.149-2.009,2.017c-0.58,0.89-1.034,1.965-1.351,3.199
		c-0.324,1.255-0.488,2.635-0.488,4.104c0,1.468,0.164,2.849,0.488,4.105c0.317,1.229,0.772,2.307,1.353,3.204
		c0.559,0.857,1.235,1.535,2.008,2.013c0.749,0.465,1.575,0.69,2.529,0.69c0.951,0,1.775-0.225,2.521-0.689
		c0.777-0.479,1.454-1.157,2.015-2.017c0.579-0.896,1.035-1.974,1.353-3.203c0.322-1.256,0.486-2.638,0.486-4.104
		c0-1.467-0.164-2.848-0.486-4.105c-0.318-1.231-0.773-2.308-1.353-3.198c-0.564-0.868-1.223-1.528-2.013-2.019
		C402.075,124.43,401.249,124.206,400.3,124.206z"/>
	<path fill="#58595B" d="M391.176,134.213c0-1.924,0.223-3.69,0.671-5.305c0.451-1.612,1.072-3.012,1.871-4.188
		c0.796-1.17,1.757-2.09,2.881-2.756c1.119-0.665,2.354-0.996,3.7-0.996c1.346,0,2.578,0.332,3.7,0.996
		c1.123,0.667,2.08,1.586,2.879,2.756c0.796,1.176,1.422,2.576,1.87,4.188c0.447,1.615,0.671,3.381,0.671,5.305
		c0,1.92-0.225,3.7-0.671,5.326c-0.448,1.624-1.074,3.028-1.87,4.201c-0.799,1.176-1.757,2.093-2.879,2.742
		c-1.122,0.653-2.354,0.979-3.7,0.979c-1.347,0-2.582-0.326-3.7-0.979c-1.124-0.649-2.085-1.566-2.881-2.742
		c-0.799-1.173-1.42-2.577-1.871-4.201C391.399,137.913,391.176,136.134,391.176,134.213z M392.822,134.213
		c0,1.571,0.174,3.026,0.523,4.38c0.349,1.353,0.846,2.526,1.494,3.527c0.65,0.998,1.435,1.784,2.354,2.351
		c0.923,0.573,1.958,0.854,3.107,0.854c1.146,0,2.179-0.281,3.102-0.854c0.92-0.567,1.705-1.353,2.355-2.351
		c0.647-1.001,1.146-2.175,1.497-3.527c0.347-1.354,0.521-2.809,0.521-4.38c0-1.564-0.174-3.027-0.521-4.378
		c-0.351-1.357-0.85-2.531-1.497-3.524c-0.65-1.001-1.435-1.783-2.355-2.354c-0.923-0.57-1.956-0.852-3.102-0.852
		c-1.148,0-2.184,0.282-3.107,0.852c-0.918,0.571-1.703,1.353-2.354,2.354c-0.648,0.994-1.146,2.167-1.494,3.524
		C392.996,131.187,392.822,132.649,392.822,134.213z"/>
	<path fill="#58595B" d="M427.78,148l-4.96-12H422v12h-4v-27h5.479c0.249,0,3.631,0.219,4.192,0.526
		c0.611,0.328,1.167,0.782,1.642,1.404c0.457,0.596,0.833,1.325,1.119,2.196c0.284,0.864,0.428,1.907,0.428,3.113
		c0,1.362-0.166,2.463-0.506,3.374c-0.34,0.913-0.781,1.671-1.308,2.256c-0.551,0.604-1.164,1.056-1.827,1.351
		c-0.158,0.071-0.316,0.176-0.475,0.237L432.046,148H427.78z M423.978,132c0.664,0,1.19-0.298,1.562-0.51
		c0.395-0.227,0.686-0.58,0.883-0.883c0.223-0.333,0.374-0.74,0.453-1.124c0.093-0.455,0.14-0.884,0.14-1.228
		c0-0.35-0.046-0.756-0.141-1.217c-0.078-0.38-0.226-0.739-0.453-1.085c-0.198-0.299-0.496-0.489-0.882-0.708
		c-0.373-0.213-0.898-0.246-1.562-0.246H422v7H423.978z"/>
	<path fill="#58595B" d="M418.842,121.61h4.637c0.233,0,0.549,0.01,0.946,0.033c0.4,0.025,0.831,0.094,1.297,0.215
		c0.462,0.117,0.939,0.308,1.42,0.572c0.481,0.259,0.913,0.637,1.296,1.138c0.383,0.5,0.699,1.129,0.948,1.887
		c0.249,0.757,0.373,1.686,0.373,2.777c0,1.214-0.143,2.207-0.437,2.992c-0.292,0.782-0.655,1.419-1.095,1.906
		c-0.442,0.484-0.928,0.848-1.457,1.083c-0.533,0.24-1.041,0.403-1.521,0.499l5.134,12.107h-1.87l-4.96-11.966h-3.066v11.966h-1.646
		V121.61z M420.488,132.718h3.489c0.863,0,1.564-0.155,2.105-0.462c0.541-0.311,0.962-0.686,1.26-1.141
		c0.299-0.446,0.502-0.935,0.609-1.457c0.108-0.527,0.163-1,0.163-1.426c0-0.429-0.055-0.901-0.163-1.426
		c-0.107-0.521-0.311-1.003-0.609-1.46c-0.298-0.45-0.719-0.831-1.26-1.138c-0.542-0.31-1.242-0.464-2.105-0.464h-3.489V132.718z"/>
</g>
<g>
	<circle fill="#184798" cx="77.469" cy="77.162" r="74.929"/>
	<g>
		<defs>
			<circle id="SVGID_1_" cx="77.469" cy="77.162" r="74.929"/>
		</defs>
		<clipPath id="SVGID_2_">
			<use xlink:href="#SVGID_1_"  overflow="visible"/>
		</clipPath>
	</g>
	<path fill="#FFFFFF" d="M144.51,75.472l-28.191-32.89L83.646,71.027l11.577,13.296l9.854-8.581
		c0.465,14.583-9.879,27.641-24.667,30.153c-16.152,2.745-31.47-8.121-34.213-24.274c-2.743-16.151,8.125-31.468,24.275-34.212
		c3.034-0.515,6.04-0.549,8.94-0.158l15.392-13.785c-8.484-3.954-18.218-5.461-28.142-3.775c-26.015,4.42-43.522,29.095-39.1,55.11
		c4.418,26.014,29.09,43.521,55.106,39.098c23.317-3.959,39.794-24.19,39.78-47.076l8.676,10.123L144.51,75.472z"/>
</g>
</svg>


			  </a>
		    </div>

              <?php
        wp_nav_menu( array(
            'menu'              => 'primary',
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav navbar-right',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
                   );
              ?>
        </div>
    </nav>

