<!DOCTYPE html>
<html>
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
        </script>
        <script>
            $(document).ready(function(){
                $("#addMore").click(function(){
                    var count = $("ul li").length;
                    $("ul").prepend('<li id='+count+'>Add Subject<input type="text" id="AddFeild" name="AddFeild[]" vale=""><a href="javascript:void(0)" onclick="removeList('+count+')">Remove</a></li>');
                });
            });

            function  removeList(id){
    
                $("#"+id).remove();
    		 }
            
        </script>
    </head>
    <body>
        <form name="AddValue" method="post" action="AddRecordTotheDatabase.php"/>
        <ul>
            <li id="append">Add Subject<input type="text" name="AddFeild[]" vale=""/></li>
        </ul>
            
            <div id="submitValue">
                <input type="submit" name="submit" value="Submit" />
            </div>
        </form>
        <input type="button" value="Add More" id="addMore"/>
</body>
</html>
