/**
 * @license Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.filebrowserBrowseUrl = 'http://localhost/IT+Tires/admin/ckfinder/ckfinder.html';
config.filebrowserImageBrowseUrl = 'http://localhost/IT+Tires/admin/ckfinder/ckfinder.html?type=Images';
config.filebrowserFlashBrowseUrl = 'http://localhost/IT+Tires/admin/ckfinder/ckfinder.html?type=Flash';
config.filebrowserUploadUrl = 'http://localhost/IT+Tires/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
config.filebrowserImageUploadUrl = 'http://localhost/IT+Tires/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
config.filebrowserFlashUploadUrl = 'http://localhost/IT+Tires/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
	config.enterMode = CKEDITOR.ENTER_BR;
};
