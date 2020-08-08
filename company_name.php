<?php
include 'connect.php';
?>

<script src="jquery/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$("#company").change(function()
{
    // document.write('test');
var country_id=$(this).val();
//var post_id = 'id='+ country_id;
var post_id = 'id='+ country_id;

$.ajax
({
type: "POST",
url: "data.php",
data: post_id,
cache: false,
success: function(aud)
{
$("#auditor").html(aud);
} 
});

});
});
</script>

<select class="form-control" id="company" style="display: inline;width:15%;margin-left:10px;" name="company[]" required>
<?php
    echo '<option value="" hidden>Select</option>';

$result = mysqli_query($conn,"SELECT  DISTINCT(company_name) FROM auditor ORDER BY `company_name` ");
while($row = mysqli_fetch_row($result))
{
    echo '<option style="color:black" value='.$row[0].'>';
    echo $row[0];
    echo '</option>';
}
?>

</select>

<select class="form-control auditor" id="auditor" style="display: inline;width:15%;margin-left:10px;" name="aud[]" required>
<option value='' hidden>Select</option>

</select>









 

















<!-- <select class="form-control" style="display: inline;width:15%;margin-left:10px;" name="aud[]" required> -->

<?php




// $result = mysqli_query($conn,"SELECT  auditor_name,company_name FROM auditor ORDER BY `company_name` ");
// $result1 = mysqli_query($conn,"SELECT  auditor_name,company_name FROM auditor ORDER BY `company_name` ");

// $colors=array("#f5d6c6","#9F9C99","Chocolate","Coral","CornflowerBlue","Cornsilk","Crimson","Cyan","DarkBlue","DarkCyan","DarkGoldenRod","DarkGray","DarkGrey","DarkGreen","DarkKhaki","DarkMagenta","DarkOliveGreen","Darkorange","DarkOrchid","DarkRed","DarkSalmon","DarkSeaGreen","DarkSlateBlue","DarkSlateGray","DarkSlateGrey","DarkTurquoise","DarkViolet","DeepPink","DeepSkyBlue","DimGray","DimGrey","DodgerBlue","FireBrick","FloralWhite","ForestGreen","Fuchsia","Gainsboro","GhostWhite","Gold","GoldenRod","Gray","Grey","Green","GreenYellow","HoneyDew","HotPink","IndianRed","Indigo","Ivory","Khaki","Lavender","LavenderBlush","LawnGreen","LemonChiffon","LightBlue","LightCoral","LightCyan","LightGoldenRodYellow","LightGray","LightGrey","LightGreen","LightPink","LightSalmon","LightSeaGreen","LightSkyBlue","LightSlateGray","LightSlateGrey","LightSteelBlue","LightYellow","Lime","LimeGreen","Linen","Magenta","Maroon","MediumAquaMarine","MediumBlue","MediumOrchid","MediumPurple","MediumSeaGreen","MediumSlateBlue","MediumSpringGreen","MediumTurquoise","MediumVioletRed","MidnightBlue","MintCream","MistyRose","Moccasin","NavajoWhite","Navy","OldLace","Olive","OliveDrab","Orange","OrangeRed","Orchid","PaleGoldenRod","PaleGreen","PaleTurquoise","PaleVioletRed","PapayaWhip","PeachPuff","Peru","Pink","Plum","PowderBlue","Purple","Red","RosyBrown","RoyalBlue","SaddleBrown","Salmon","SandyBrown","SeaGreen","SeaShell","Sienna","Silver","SkyBlue","SlateBlue","SlateGray","SlateGrey","Snow","SpringGreen","SteelBlue","Tan","Teal","Thistle","Tomato","Turquoise","Violet","Wheat","White","WhiteSmoke","Yellow","YellowGreen");
// $i=0;
// $n=0;
// $j=0;
// $c=0;
// $row1 = mysqli_fetch_row($result1);
// $row = mysqli_fetch_row($result);
// echo '<option value="" hidden>Select</option>';
// do{
//     $row1 = mysqli_fetch_row($result1);
    
//     echo '<option style="background-color:'.$colors[$c].';color:black">';
//     print_r($row[0]);
//     echo '</option>';
// if($row[1]!=$row1[1])
// {
//     $c++;
// }
// //print_r($row1[1]);

// }while($row = mysqli_fetch_row($result));


?>
<!-- </select> -->


<?php
// include 'connect.php';




// $result = mysqli_query($conn,"SELECT  auditor_name,company_name FROM auditor ORDER BY `company_name` ");
// $result1 = mysqli_query($conn,"SELECT  auditor_name,company_name FROM auditor ORDER BY `company_name` ");

// $colors=array("AntiqueWhite","Chartreuse","Chocolate","Coral","CornflowerBlue","Cornsilk","Crimson","Cyan","DarkBlue","DarkCyan","DarkGoldenRod","DarkGray","DarkGrey","DarkGreen","DarkKhaki","DarkMagenta","DarkOliveGreen","Darkorange","DarkOrchid","DarkRed","DarkSalmon","DarkSeaGreen","DarkSlateBlue","DarkSlateGray","DarkSlateGrey","DarkTurquoise","DarkViolet","DeepPink","DeepSkyBlue","DimGray","DimGrey","DodgerBlue","FireBrick","FloralWhite","ForestGreen","Fuchsia","Gainsboro","GhostWhite","Gold","GoldenRod","Gray","Grey","Green","GreenYellow","HoneyDew","HotPink","IndianRed","Indigo","Ivory","Khaki","Lavender","LavenderBlush","LawnGreen","LemonChiffon","LightBlue","LightCoral","LightCyan","LightGoldenRodYellow","LightGray","LightGrey","LightGreen","LightPink","LightSalmon","LightSeaGreen","LightSkyBlue","LightSlateGray","LightSlateGrey","LightSteelBlue","LightYellow","Lime","LimeGreen","Linen","Magenta","Maroon","MediumAquaMarine","MediumBlue","MediumOrchid","MediumPurple","MediumSeaGreen","MediumSlateBlue","MediumSpringGreen","MediumTurquoise","MediumVioletRed","MidnightBlue","MintCream","MistyRose","Moccasin","NavajoWhite","Navy","OldLace","Olive","OliveDrab","Orange","OrangeRed","Orchid","PaleGoldenRod","PaleGreen","PaleTurquoise","PaleVioletRed","PapayaWhip","PeachPuff","Peru","Pink","Plum","PowderBlue","Purple","Red","RosyBrown","RoyalBlue","SaddleBrown","Salmon","SandyBrown","SeaGreen","SeaShell","Sienna","Silver","SkyBlue","SlateBlue","SlateGray","SlateGrey","Snow","SpringGreen","SteelBlue","Tan","Teal","Thistle","Tomato","Turquoise","Violet","Wheat","White","WhiteSmoke","Yellow","YellowGreen");
// $i=0;
// $n=0;
// $j=0;
// $c=0;
// $row1 = mysqli_fetch_row($result1);
// $row = mysqli_fetch_row($result);
//  do{
//     $row1 = mysqli_fetch_row($result1);

// print_r($row[1]);
// print_r($row1[1]);

// echo '<br>';}while($row = mysqli_fetch_row($result));


?>