/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
  // config.uiColor = '#AADC6E';
config.filebrowserBrowseUrl = 'http://domain.com/asset/kcfinder/browse.php?type=files';
config.filebrowserImageBrowseUrl = 'http://localhost:8000/assets/ckeditor/kcfinder/browse.php?type=images';
config.filebrowserFlashBrowseUrl = 'http://domain.com/asset/kcfinder/browse.php?type=flash';
config.filebrowserUploadUrl = 'http://domain.com/asset/kcfinder/upload.php?type=files';
config.filebrowserImageUploadUrl = 'http://localhost:8000/assets/ckeditor/kcfinder/upload.php?type=images';
config.filebrowserFlashUploadUrl = 'http://domain.com/asset/kcfinder/upload.php?type=flash';

};
