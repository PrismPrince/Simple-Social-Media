<style type="text/css">
	@media (max-width: 480px) {
		.panel > .create-comment > form > .panel-body > .cont > .i-img {
			max-height: 100px;
		}
		.panel > .create-comment > form > .panel-body > .cont > .i-img > .img-drop {
			bottom: 20px;
		}
	}
	@media (min-width: 480px) {
		.panel > .create-comment > form > .panel-body > .cont > .i-img {
			max-height: 250px;
		}
		.panel > .create-comment > form > .panel-body > .cont > .i-img > .img-drop {
			bottom: 100px;
		}
	}
	@media (min-width: 768px) {
		.panel > .create-comment > form > .panel-body > .cont > .i-img > .img-drop {
			bottom: 100px;
		}
	}
	@-webkit-keyframes load3 {
		0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
		}
		100% {
			-webkit-transform: rotate(360deg);
			transform: rotate(360deg);
		}
	}
	@keyframes load3 {
		0% {
			-webkit-transform: rotate(0deg);
			transform: rotate(0deg);
		}
		100% {
			-webkit-transform: rotate(360deg);
			transform: rotate(360deg);
		}
	}
	.loader {
		position: relative;
		animation: load3 1.4s infinite linear;
		-webkit-animation: load3 1.4s infinite linear;
		transform: translateZ(0);
		-webkit-transform: translateZ(0);
		-ms-transform: translateZ(0);
	}
	.panel > .panel-heading {
		background-color: #fff;
		border: none;
	}
	.panel > .create-comment > .loader {
		margin: 30px 0;
	}

	.panel > .create-comment > .panel-footer {
		background-color: #fff;
		border-top: 1px solid #e5e5e5;
	}

	.panel > .create-comment > form > .panel-body > .img {
	}

	.panel > .create-comment > form > .panel-body > .img > img {
		width: 100%;
		height: 100%;
		border-radius: 50%;
	}

	.panel > .create-comment > form > .panel-body > .cont {
		padding-left: 10px;
	}

	.panel > .create-comment > form > .panel-body > .cont > *,
	.form-edit .cont > .d {
		border: none;
	}

	.panel > .create-comment > form > .panel-body > .cont > .d,
	 .form-edit .cont > .d {
		width: 100%;
		padding: 5px 10px;
		border-top: 1px solid #e5e5e5;
	}

	.panel > .create-comment > form > .panel-body > .cont > .d,
	.form-edit .cont > .d {
		resize: none;
	}
	.form-edit .cont > .d {
		margin-top: 20px;
		height: 50px;
	}
	.form-edit img {
		width: 100%;
		height: 100%;
	}
	.panel > .create-comment > form > .panel-body > .cont > .i-img {
		width: 50px;
		height: 50px;
		border: 1px solid #e5e5e5;
		border-radius: 5px;
		background: url({{ url('img/plus.png') }}) no-repeat;
		background-position: 50%;
		background-size: 25px;
	}
	.panel > .create-comment > form > .panel-body > .cont > .i-img > .img-up {
		width: 100%;
		height: 100%;
		display: block;
		opacity: 0;
		cursor: pointer;
	}
	.panel > .create-comment > form > .panel-body > .cont > .i-img > .img-drop {
		width: 100%;
		bottom: 100px;
		position: absolute;
		display: none;
		color: #7e97ba;
		font-weight: bold;
	}
	.panel > .create-comment > form > .panel-body > .cont > .i-img > .img-dismiss {
		float: right;
		display: none;
		height: 25px;
		width: 25px;
		margin: 10px 10px -35px 0;
		padding: 3px;
		border: 1px solid #fff;
		border-radius: 50%;
		position: relative;
		font-size: small;
		background-color: rgba(0, 0, 0, .7);
		color: #fff;
		cursor: pointer;
	}
	.bar.title {
		margin-bottom: 15px;
		margin-top: 15px;
	}
	.bar.title {
		height: 5px;
    background-color: #bbb;
    height: 5px;
	}
	.bar.title > div {
		color: #bbb;
		background: #e9ebee;
		display: inline-block;
		position: relative;
		bottom: 9px;
		padding: 0 10px;
	}
</style>
