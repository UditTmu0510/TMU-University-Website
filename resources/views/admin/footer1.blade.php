

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>TMU</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">TMU Web Team</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('backend/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('backend/assets/js/main.js')}}"></script>

  <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/super-build/ckeditor.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $(document).ready(function(){
        // Basic
        $('.dropify').dropify();

   


        $('#college_id').change(function () {
                  var cdID = $(this).val();    

        var cdID1 = -1;
$.ajax({
    url: '{!! route("getmasterprogramme") !!}',
    method: 'post',
    data: {
        _token: '{{ csrf_token() }}',
        cdID: cdID1
    },
    dataType: 'json',
    success: function(response) {
        $('#branch_id').find('option').not(':first').remove();

        $.each(response, function(index, data) {
            $('#branch_id').append('<option value="' + data.prog_id + '">' + data.prog_name + '</option>');
        });
    }
});


$.ajax({
    url: '{!! route("getmasterprogramme") !!}',
    method: 'post',
    data: {
        _token: '{{ csrf_token() }}',
        cdID: cdID
    },
    dataType: 'json',
    success: function(response) {
        // $('#branch_id').find('option').not(':first').remove();

        $.each(response, function(index, data) {
            $('#branch_id').append('<option value="' + data.prog_id + '">' + data.prog_name + '</option>');
        });
    }
});


        });


        



        });

      

</script>
<script>
// This sample still does not showcase all CKEditor&nbsp;5 features (!)
// Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
CKEDITOR.ClassicEditor.create(document.getElementById("area"), {
// https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format

disallowedContent: 'figure.table',
toolbar: {
items: [
'exportPDF','exportWord', '|',
'findAndReplace', 'selectAll', '|',
'heading', '|',
'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
'bulletedList', 'numberedList', 'todoList', '|',
'outdent', 'indent', '|',
'undo', 'redo',
'-',
'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
'alignment', '|',
'link', 'insertImage', 'blockQuote','insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
'specialCharacters', 'horizontalLine', 'pageBreak', '|',
'textPartLanguage', '|',
'sourceEditing'
],
shouldNotGroupWhenFull: true
},
// Changing the language of the interface requires loading the language file using the <script> tag.
// language: 'es',
list: {
properties: {
styles: true,
startIndex: true,
reversed: true
}
},
// https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
heading: {
options: [
{ model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
{ model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
{ model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
{ model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
{ model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
{ model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
{ model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
]
},
// https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
placeholder: 'Welcome to CKEditor&nbsp;5!',
// https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
fontFamily: {
options: [
'default',
'Arial, Helvetica, sans-serif',
'Courier New, Courier, monospace',
'Georgia, serif',
'Lucida Sans Unicode, Lucida Grande, sans-serif',
'Tahoma, Geneva, sans-serif',
'Times New Roman, Times, serif',
'Trebuchet MS, Helvetica, sans-serif',
'Verdana, Geneva, sans-serif'
],
supportAllValues: true
},
// https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
fontSize: {
options: [ 10, 12, 14, 'default', 18, 20, 22 ],
supportAllValues: true
},
// Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
// https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
htmlSupport: {
allow: [
{
name: /.*/,
attributes: true,
classes: true,
styles: true
}
]
},
// Be careful with enabling previews
// https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
htmlEmbed: {
showPreviews: true
},
// https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
link: {
decorators: {
addTargetToExternalLinks: true,
defaultProtocol: 'https://',
toggleDownloadable: {
mode: 'manual',
label: 'Downloadable',
attributes: {
download: 'file'
}
}
}
},
// https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
mention: {
feeds: [
{
marker: '@',
feed: [
'@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
'@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
'@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
'@sugar', '@sweet', '@topping', '@wafer'
],
minimumCharacters: 1
}
]
},
// The "super-build" contains more premium features that require additional configuration, disable them below.
// Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
removePlugins: [
// These two are commercial, but you can try them out without registering to a trial.
// 'ExportPdf',
// 'ExportWord',
'CKBox',
'CKFinder',
'EasyImage',
// This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
// https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
// Storing images as Base64 is usually a very bad idea.
// Replace it on production website with other solutions:
// https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
// 'Base64UploadAdapter',
'RealTimeCollaborativeComments',
'RealTimeCollaborativeTrackChanges',
'RealTimeCollaborativeRevisionHistory',
'PresenceList',
'Comments',
'TrackChanges',
'TrackChangesData',
'RevisionHistory',
'Pagination',
'WProofreader',
// Careful, with the Mathtype plugin CKEditor will not load when loading this sample
// from a local file system (file://) - load this site via HTTP server if you enable MathType.
'MathType',
// The following features are part of the Productivity Pack and require additional license.
'SlashCommand',
'Template',
'DocumentOutline',
'FormatPainter',
'TableOfContents',
'PasteFromOfficeEnhanced',
]
});


</script>



<script>
  // This sample still does not showcase all CKEditor&nbsp;5 features (!)
  // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
  CKEDITOR.ClassicEditor.create(document.getElementById("event_full_description"), {
  // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
  
  disallowedContent: 'figure.table',
  toolbar: {
  items: [
  'exportPDF','exportWord', '|',
  'findAndReplace', 'selectAll', '|',
  'heading', '|',
  'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
  'bulletedList', 'numberedList', 'todoList', '|',
  'outdent', 'indent', '|',
  'undo', 'redo',
  '-',
  'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
  'alignment', '|',
  'link', 'insertImage', 'blockQuote','insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
  'specialCharacters', 'horizontalLine', 'pageBreak', '|',
  'textPartLanguage', '|',
  'sourceEditing'
  ],
  shouldNotGroupWhenFull: true
  },
  // Changing the language of the interface requires loading the language file using the <script> tag.
  // language: 'es',
  list: {
  properties: {
  styles: true,
  startIndex: true,
  reversed: true
  }
  },
  // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
  heading: {
  options: [
  { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
  { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
  { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
  { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
  { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
  { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
  { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
  ]
  },
  // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
  placeholder: 'Welcome to CKEditor&nbsp;5!',
  // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
  fontFamily: {
  options: [
  'default',
  'Arial, Helvetica, sans-serif',
  'Courier New, Courier, monospace',
  'Georgia, serif',
  'Lucida Sans Unicode, Lucida Grande, sans-serif',
  'Tahoma, Geneva, sans-serif',
  'Times New Roman, Times, serif',
  'Trebuchet MS, Helvetica, sans-serif',
  'Verdana, Geneva, sans-serif'
  ],
  supportAllValues: true
  },
  // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
  fontSize: {
  options: [ 10, 12, 14, 'default', 18, 20, 22 ],
  supportAllValues: true
  },
  // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
  // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
  htmlSupport: {
  allow: [
  {
  name: /.*/,
  attributes: true,
  classes: true,
  styles: true
  }
  ]
  },
  // Be careful with enabling previews
  // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
  htmlEmbed: {
  showPreviews: true
  },
  // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
  link: {
  decorators: {
  addTargetToExternalLinks: true,
  defaultProtocol: 'https://',
  toggleDownloadable: {
  mode: 'manual',
  label: 'Downloadable',
  attributes: {
  download: 'file'
  }
  }
  }
  },
  // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
  mention: {
  feeds: [
  {
  marker: '@',
  feed: [
  '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
  '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
  '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
  '@sugar', '@sweet', '@topping', '@wafer'
  ],
  minimumCharacters: 1
  }
  ]
  },
  // The "super-build" contains more premium features that require additional configuration, disable them below.
  // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
  removePlugins: [
  // These two are commercial, but you can try them out without registering to a trial.
  // 'ExportPdf',
  // 'ExportWord',
  'CKBox',
  'CKFinder',
  'EasyImage',
  // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
  // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
  // Storing images as Base64 is usually a very bad idea.
  // Replace it on production website with other solutions:
  // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
  // 'Base64UploadAdapter',
  'RealTimeCollaborativeComments',
  'RealTimeCollaborativeTrackChanges',
  'RealTimeCollaborativeRevisionHistory',
  'PresenceList',
  'Comments',
  'TrackChanges',
  'TrackChangesData',
  'RevisionHistory',
  'Pagination',
  'WProofreader',
  // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
  // from a local file system (file://) - load this site via HTTP server if you enable MathType.
  'MathType',
  // The following features are part of the Productivity Pack and require additional license.
  'SlashCommand',
  'Template',
  'DocumentOutline',
  'FormatPainter',
  'TableOfContents',
  'PasteFromOfficeEnhanced',
  ]
  });
  
  
  </script>
 
 <script>
 // This sample still does not showcase all CKEditor&nbsp;5 features (!)
 // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
 CKEDITOR.ClassicEditor.create(document.getElementById("description"), {
 // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
 
 disallowedContent: 'figure.table',
 toolbar: {
 items: [
 'exportPDF','exportWord', '|',
 'findAndReplace', 'selectAll', '|',
 'heading', '|',
 'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
 'bulletedList', 'numberedList', 'todoList', '|',
 'outdent', 'indent', '|',
 'undo', 'redo',
 '-',
 'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
 'alignment', '|',
 'link', 'insertImage', 'blockQuote','insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
 'specialCharacters', 'horizontalLine', 'pageBreak', '|',
 'textPartLanguage', '|',
 'sourceEditing'
 ],
 shouldNotGroupWhenFull: true
 },
 // Changing the language of the interface requires loading the language file using the <script> tag.
 // language: 'es',
 list: {
 properties: {
 styles: true,
 startIndex: true,
 reversed: true
 }
 },
 // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
 heading: {
 options: [
 { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
 { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
 { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
 { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
 { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
 { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
 { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
 ]
 },
 // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
 placeholder: 'Welcome to CKEditor&nbsp;5!',
 // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
 fontFamily: {
 options: [
 'default',
 'Arial, Helvetica, sans-serif',
 'Courier New, Courier, monospace',
 'Georgia, serif',
 'Lucida Sans Unicode, Lucida Grande, sans-serif',
 'Tahoma, Geneva, sans-serif',
 'Times New Roman, Times, serif',
 'Trebuchet MS, Helvetica, sans-serif',
 'Verdana, Geneva, sans-serif'
 ],
 supportAllValues: true
 },
 // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
 fontSize: {
 options: [ 10, 12, 14, 'default', 18, 20, 22 ],
 supportAllValues: true
 },
 // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
 // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
 htmlSupport: {
 allow: [
 {
 name: /.*/,
 attributes: true,
 classes: true,
 styles: true
 }
 ]
 },
 // Be careful with enabling previews
 // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
 htmlEmbed: {
 showPreviews: true
 },
 // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
 link: {
 decorators: {
 addTargetToExternalLinks: true,
 defaultProtocol: 'https://',
 toggleDownloadable: {
 mode: 'manual',
 label: 'Downloadable',
 attributes: {
 download: 'file'
 }
 }
 }
 },
 // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
 mention: {
 feeds: [
 {
 marker: '@',
 feed: [
 '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
 '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
 '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
 '@sugar', '@sweet', '@topping', '@wafer'
 ],
 minimumCharacters: 1
 }
 ]
 },
 // The "super-build" contains more premium features that require additional configuration, disable them below.
 // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
 removePlugins: [
 // These two are commercial, but you can try them out without registering to a trial.
 // 'ExportPdf',
 // 'ExportWord',
 'CKBox',
 'CKFinder',
 'EasyImage',
 // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
 // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
 // Storing images as Base64 is usually a very bad idea.
 // Replace it on production website with other solutions:
 // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
 // 'Base64UploadAdapter',
 'RealTimeCollaborativeComments',
 'RealTimeCollaborativeTrackChanges',
 'RealTimeCollaborativeRevisionHistory',
 'PresenceList',
 'Comments',
 'TrackChanges',
 'TrackChangesData',
 'RevisionHistory',
 'Pagination',
 'WProofreader',
 // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
 // from a local file system (file://) - load this site via HTTP server if you enable MathType.
 'MathType',
 // The following features are part of the Productivity Pack and require additional license.
 'SlashCommand',
 'Template',
 'DocumentOutline',
 'FormatPainter',
 'TableOfContents',
 'PasteFromOfficeEnhanced',
 ]
 });
 
 
 </script>





<script>
  // This sample still does not showcase all CKEditor&nbsp;5 features (!)
  // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
  CKEDITOR.ClassicEditor.create(document.getElementById("responsibilities"), {
  // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
  
  disallowedContent: 'figure.table',
  toolbar: {
  items: [
  'exportPDF','exportWord', '|',
  'findAndReplace', 'selectAll', '|',
  'heading', '|',
  'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
  'bulletedList', 'numberedList', 'todoList', '|',
  'outdent', 'indent', '|',
  'undo', 'redo',
  '-',
  'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
  'alignment', '|',
  'link', 'insertImage', 'blockQuote','insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
  'specialCharacters', 'horizontalLine', 'pageBreak', '|',
  'textPartLanguage', '|',
  'sourceEditing'
  ],
  shouldNotGroupWhenFull: true
  },
  // Changing the language of the interface requires loading the language file using the <script> tag.
  // language: 'es',
  list: {
  properties: {
  styles: true,
  startIndex: true,
  reversed: true
  }
  },
  // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
  heading: {
  options: [
  { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
  { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
  { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
  { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
  { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
  { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
  { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
  ]
  },
  // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
  placeholder: 'Welcome to CKEditor&nbsp;5!',
  // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
  fontFamily: {
  options: [
  'default',
  'Arial, Helvetica, sans-serif',
  'Courier New, Courier, monospace',
  'Georgia, serif',
  'Lucida Sans Unicode, Lucida Grande, sans-serif',
  'Tahoma, Geneva, sans-serif',
  'Times New Roman, Times, serif',
  'Trebuchet MS, Helvetica, sans-serif',
  'Verdana, Geneva, sans-serif'
  ],
  supportAllValues: true
  },
  // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
  fontSize: {
  options: [ 10, 12, 14, 'default', 18, 20, 22 ],
  supportAllValues: true
  },
  // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
  // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
  htmlSupport: {
  allow: [
  {
  name: /.*/,
  attributes: true,
  classes: true,
  styles: true
  }
  ]
  },
  // Be careful with enabling previews
  // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
  htmlEmbed: {
  showPreviews: true
  },
  // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
  link: {
  decorators: {
  addTargetToExternalLinks: true,
  defaultProtocol: 'https://',
  toggleDownloadable: {
  mode: 'manual',
  label: 'Downloadable',
  attributes: {
  download: 'file'
  }
  }
  }
  },
  // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
  mention: {
  feeds: [
  {
  marker: '@',
  feed: [
  '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
  '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
  '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
  '@sugar', '@sweet', '@topping', '@wafer'
  ],
  minimumCharacters: 1
  }
  ]
  },
  // The "super-build" contains more premium features that require additional configuration, disable them below.
  // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
  removePlugins: [
  // These two are commercial, but you can try them out without registering to a trial.
  // 'ExportPdf',
  // 'ExportWord',
  'CKBox',
  'CKFinder',
  'EasyImage',
  // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
  // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
  // Storing images as Base64 is usually a very bad idea.
  // Replace it on production website with other solutions:
  // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
  // 'Base64UploadAdapter',
  'RealTimeCollaborativeComments',
  'RealTimeCollaborativeTrackChanges',
  'RealTimeCollaborativeRevisionHistory',
  'PresenceList',
  'Comments',
  'TrackChanges',
  'TrackChangesData',
  'RevisionHistory',
  'Pagination',
  'WProofreader',
  // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
  // from a local file system (file://) - load this site via HTTP server if you enable MathType.
  'MathType',
  // The following features are part of the Productivity Pack and require additional license.
  'SlashCommand',
  'Template',
  'DocumentOutline',
  'FormatPainter',
  'TableOfContents',
  'PasteFromOfficeEnhanced',
  ]
  });
  
  
  </script>



<script>
  // This sample still does not showcase all CKEditor&nbsp;5 features (!)
  // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
  CKEDITOR.ClassicEditor.create(document.getElementById("requirements"), {
  // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
  
  disallowedContent: 'figure.table',
  toolbar: {
  items: [
  'exportPDF','exportWord', '|',
  'findAndReplace', 'selectAll', '|',
  'heading', '|',
  'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
  'bulletedList', 'numberedList', 'todoList', '|',
  'outdent', 'indent', '|',
  'undo', 'redo',
  '-',
  'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
  'alignment', '|',
  'link', 'insertImage', 'blockQuote','insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
  'specialCharacters', 'horizontalLine', 'pageBreak', '|',
  'textPartLanguage', '|',
  'sourceEditing'
  ],
  shouldNotGroupWhenFull: true
  },
  // Changing the language of the interface requires loading the language file using the <script> tag.
  // language: 'es',
  list: {
  properties: {
  styles: true,
  startIndex: true,
  reversed: true
  }
  },
  // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
  heading: {
  options: [
  { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
  { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
  { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
  { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
  { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
  { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
  { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
  ]
  },
  // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
  placeholder: 'Welcome to CKEditor&nbsp;5!',
  // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
  fontFamily: {
  options: [
  'default',
  'Arial, Helvetica, sans-serif',
  'Courier New, Courier, monospace',
  'Georgia, serif',
  'Lucida Sans Unicode, Lucida Grande, sans-serif',
  'Tahoma, Geneva, sans-serif',
  'Times New Roman, Times, serif',
  'Trebuchet MS, Helvetica, sans-serif',
  'Verdana, Geneva, sans-serif'
  ],
  supportAllValues: true
  },
  // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
  fontSize: {
  options: [ 10, 12, 14, 'default', 18, 20, 22 ],
  supportAllValues: true
  },
  // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
  // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
  htmlSupport: {
  allow: [
  {
  name: /.*/,
  attributes: true,
  classes: true,
  styles: true
  }
  ]
  },
  // Be careful with enabling previews
  // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
  htmlEmbed: {
  showPreviews: true
  },
  // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
  link: {
  decorators: {
  addTargetToExternalLinks: true,
  defaultProtocol: 'https://',
  toggleDownloadable: {
  mode: 'manual',
  label: 'Downloadable',
  attributes: {
  download: 'file'
  }
  }
  }
  },
  // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
  mention: {
  feeds: [
  {
  marker: '@',
  feed: [
  '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
  '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
  '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
  '@sugar', '@sweet', '@topping', '@wafer'
  ],
  minimumCharacters: 1
  }
  ]
  },
  // The "super-build" contains more premium features that require additional configuration, disable them below.
  // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
  removePlugins: [
  // These two are commercial, but you can try them out without registering to a trial.
  // 'ExportPdf',
  // 'ExportWord',
  'CKBox',
  'CKFinder',
  'EasyImage',
  // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
  // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
  // Storing images as Base64 is usually a very bad idea.
  // Replace it on production website with other solutions:
  // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
  // 'Base64UploadAdapter',
  'RealTimeCollaborativeComments',
  'RealTimeCollaborativeTrackChanges',
  'RealTimeCollaborativeRevisionHistory',
  'PresenceList',
  'Comments',
  'TrackChanges',
  'TrackChangesData',
  'RevisionHistory',
  'Pagination',
  'WProofreader',
  // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
  // from a local file system (file://) - load this site via HTTP server if you enable MathType.
  'MathType',
  // The following features are part of the Productivity Pack and require additional license.
  'SlashCommand',
  'Template',
  'DocumentOutline',
  'FormatPainter',
  'TableOfContents',
  'PasteFromOfficeEnhanced',
  ]
  });
  
  
  </script>

</body>

</html>