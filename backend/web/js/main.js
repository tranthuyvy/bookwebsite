

tinymce.init({
   selector: "textarea#product_description",
   theme: "modern",
   width: "",
   height: "400",
   plugins: [
      "advlist autolink link image lists charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
      "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
   ],
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect | responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
   image_advtab: true ,

   external_filemanager_path:"/bookwebsite/backend/web/filemanager/",
   filemanager_title:"Responsive Filemanager" ,
   external_plugins: { "filemanager" : "/bookwebsite/backend/web/js/tinymce/plugins/responsivefilemanager/plugin.min.js"},

   file_browser_callback: function (field_name, url, type, win) {

      tinyMCE.activeEditor.windowManager.open({
         title : 'Install Image',
         width : 400,  // Your dimensions may differ - toy around with them!
         height : 400,
         url:'/bookwebsite/backend/web/filemanager/dialog.php?type=1&field_id='+ field_name
      }, {
         window : win,
         input : field_name
      });
      return false;
   }
});

$(document).ready(function () {
   $('#proImg').click(function(event) {
      $('#myModal').modal('show');
   });

   $('#myModal').on('hidden.bs.modal', function (){
         imgSrc = $('#proImg').val();
         $("#previewImage").attr({
            'src': imgSrc
         });
   })
});