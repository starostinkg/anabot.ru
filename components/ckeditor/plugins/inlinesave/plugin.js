CKEDITOR.plugins.add( 'inlinesave',
{
	init: function( editor )
	{
		editor.addCommand( 'inlinesave',
			{
				exec : function( editor )
				{

					addData();
					
					function addData() {
						var data = editor.getData();
						var dataID = editor.container.getId();
      download(data,document.forms[0].TitleTheme.value);
					} 

				}
			});
		editor.ui.addButton( 'Inlinesave',
		{
			label: 'Save',
			command: 'inlinesave',
			icon: this.path + 'images/inlinesave.png?12345'
		} );
	}
} );

function download(data, title){
 if (title == '') {
  var regexp = /<h1[^>]*>(.*)<\/h1>/i;
  var matches = data.match(regexp);
  matches = matches[1].replace(/<p[^>]*>/g, ' ');
  matches = matches.replace(/<br[^>]*>/g, ' ');
  matches = matches.replace(/&[^;]+;/g, ' ');
  title = matches.replace(/<[^>]+>/g, '');
 }
 ;
    var a = document.body.appendChild(
        document.createElement("a")
    );
    a.download = title+".html";
    a.href = "data:text/html," + data; // Grab the HTML
    a.click(); // Trigger a click on the element
}