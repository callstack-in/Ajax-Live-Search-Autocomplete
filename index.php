
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script type="text/javascript" src="./js/ajax-live-search.min.js"></script>
        <link rel="stylesheet" href="./css/als-style.css"/>
        <script>

            function search(key) {
                var settings = {
                    ajaxUrl: 'ajax.php?key=' + key,
                    inputId: 'search',

                    //optional
                    itemsPerPage: 5,
                    //optional
                    inputLength: 1,
                    inputValue: 'name',

                    //optional
                    coloumnHead: 'Name, Class, Roll No.',
                    //optional
                    fields: 'name,class,roll',
                    //optional
                    data: ''
                }

                AjaxLiveSearch.init(settings, function (data) {
                    console.log(data);
                });
            }



        </script>

        <style>
            /*#als-data  td:nth-of-type(1):before { content: "Name : "; }
            #als-data  td:nth-of-type(2):before { content: "Class : "; }
            #als-data  td:nth-of-type(3):before { content: "Roll : "; }*/
        </style>

    </head>
    <body>
        <div>

            <div class="als-cont" style="position: absolute; margin: 50px; padding: 100px;">
                Search
                <input type="text" name="search" id="search" onkeyup="search(this.value)" autocomplete="off" />
            </div>

        </div>
    </body>
</html>