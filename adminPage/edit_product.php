﻿
 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i class="add"></i><em>Edit/Add Product</em></span>
    <span class="modular fr"><a href="admin.php?content=adminPage/product_list" class="pt-link-btn">Product List</a></span>
  </div>
<form method="post" action="" name="product_editForm">
  <table class="list-style">
   <tr>
    <td style="text-align:center;color: #ddd;">Name:</td>
    <td><input type="text" class="textBox length-long" name="productName" /></td>
   </tr>
   <tr>
    <td style="text-align:center;color: #ddd;">Type:</td>
    <td>
     <select required class="textBox" name="productType"  onchange="showSelectValue(this)">
      <option selected="selected" value="">Please select type</option>
      <option value="Laptop">Laptop</option>
      <option value="Mobile">Mobile</option>
      <option value="Computer">Computer</option>
      <option value="Camera">Camera</option>
      <option value="Audio&Video">Audio&Video</option>
      <option value="Others">Others</option>
     </select>
    </td>
   </tr>
   <!-- for laptop -->
   <tr  name="detail_laptop" style="display:none;">
    <td align="right" style="color: #ddd;font-size: 10px;">Brand:</td>
    <td><input type="text" name="laptop_brand"></td>
   </tr>
   <tr  name="detail_laptop" style="display:none;">
    <td align="right" style="color: #ddd;font-size: 10px;">Graphics Card:</td>
    <td><input type="text" name="laptop_graphicsCard"></td>
   </tr>
   <tr  name="detail_laptop" style="display:none;">
    <td align="right" style="color: #ddd;font-size: 10px;">CPU:</td>
    <td><input type="text" name="laptop_cpu"></td>
   </tr>
   <tr  name="detail_laptop" style="display:none;">
    <td align="right" style="color: #ddd;font-size: 10px;">Size:</td>
    <td><input type="text" name="laptop_size"></td>
   </tr>
   <!-- for mobile -->
   <tr style="display:none;"  name="detail_mobile">
    <td align="right" style="color: #ddd;font-size: 10px;">Brand:</td>
    <td><input type="text" name=""></td>
   </tr>
   <tr style="display:none;"  name="detail_mobile">
    <td align="right" style="color: #ddd;font-size: 10px;">Size:</td>
    <td><input type="text" name=""></td>
   </tr>
   <tr style="display:none;"  name="detail_mobile">
    <td align="right" style="color: #ddd;font-size: 10px;">System:</td>
    <td><input type="text" name=""></td>
   </tr>
   <tr style="display:none;"  name="detail_mobile">
    <td align="right" style="color: #ddd;font-size: 10px;">Pixel:</td>
    <td><input type="text" name=""></td>
   </tr>   
   <tr style="display:none;"  name="detail_mobile">
    <td align="right" style="color: #ddd;font-size: 10px;">Shop:</td>
    <td><input type="text" name=""></td>
   </tr>  
   <!-- for computer -->
   <tr style="display:none;"  name="detail_computer">
    <td align="right" style="color: #ddd;font-size: 10px;">Brand:</td>
    <td><input type="text" name=""></td>
   </tr>
   <tr style="display:none;"  name="detail_computer">
    <td align="right" style="color: #ddd;font-size: 10px;">Case:</td>
    <td><input type="text" name=""></td>
   </tr>
   <tr style="display:none;"  name="detail_computer">
    <td align="right" style="color: #ddd;font-size: 10px;">Screen:</td>
    <td><input type="text" name=""></td>
   </tr>
   <tr style="display:none;"  name="detail_computer">
    <td align="right" style="color: #ddd;font-size: 10px;">CPU:</td>
    <td><input type="text" name=""></td>
   </tr>
   <tr style="display:none;"  name="detail_computer">
    <td align="right" style="color: #ddd;font-size: 10px;">Graphics Card:</td>
    <td><input type="text" name=""></td>
   </tr>
   <!-- for camera -->
   <tr style="display:none;"  name="detail_camera">
    <td align="right" style="color: #ddd;font-size: 10px;">Brand:</td>
    <td><input type="text" name=""></td>
   </tr>
   <tr style="display:none;"  name="detail_camera">
    <td align="right" style="color: #ddd;font-size: 10px;">Type:</td>
    <td><input type="text" name=""></td>
   </tr>
   <tr style="display:none;"  name="detail_camera">
    <td align="right" style="color: #ddd;font-size: 10px;">Pixel:</td>
    <td><input type="text" name=""></td>
   </tr>
   <tr style="display:none;"  name="detail_camera">
    <td align="right" style="color: #ddd;font-size: 10px;">Others:</td>
    <td><input type="text" name=""></td>
   </tr>
   <!-- for Audio&Video -->
   <tr style="display:none;"  name="detail_audio&video">
    <td align="right" style="color: #ddd;font-size: 10px;">Headset:</td>
    <td><input type="text" name=""></td>
   </tr>
   <tr style="display:none;"  name="detail_audio&video">
    <td align="right" style="color: #ddd;font-size: 10px;">VR:</td>
    <td><input type="text" name=""></td>
   </tr>
   <tr style="display:none;"  name="detail_audio&video">
    <td align="right" style="color: #ddd;font-size: 10px;">Speakers:</td>
    <td><input type="text" name=""></td>
   </tr>
   <tr style="display:none;"  name="detail_audio&video">
    <td align="right" style="color: #ddd;font-size: 10px;">MP3/MP4:</td>
    <td><input type="text" name=""></td>
   </tr>
   <tr style="display:none;"  name="detail_audio&video">
    <td align="right" style="color: #ddd;font-size: 10px;">Tablet:</td>
    <td><input type="text" name=""></td>
   </tr>
   <!-- for Others -->
   <tr style="display:none;"  name="detail_others">
    <td align="right" style="color: #ddd;font-size: 10px;">PSP:</td>
    <td><input type="text" name=""></td>
   </tr>
   <tr style="display:none;"  name="detail_others">
    <td align="right" style="color: #ddd;font-size: 10px;">Screen:</td>
    <td><input type="text" name=""></td>
   </tr>
   <tr style="display:none;"  name="detail_others">
    <td align="right" style="color: #ddd;font-size: 10px;">CPU:</td>
    <td><input type="text" name=""></td>
   </tr>
   <tr style="display:none;"  name="detail_others">
    <td align="right" style="color: #ddd;font-size: 10px;">Size:</td>
    <td><input type="text" name=""></td>
   </tr>

   <tr>
    <td style="text-align:center;color: #ddd;">Origin Price:</td>
    <td>
     <input type="text" class="textBox length-short" value="" name="productOrigin" />
     <span>GBP</span>
    </td>
   </tr>
   <tr>
    <td style="text-align:center;color: #ddd;">Now Price:</td>
    <td>
     <input type="text" class="textBox length-short" value="" name="productNow" />
     <span>GBP</span>
    </td>
   </tr>
   <tr>
    <td style="text-align:center;color: #ddd;">Quantity:</td>
    <td>
     <input type="text" class="textBox length-short" value="" name="productQuantity" />
     <span>items</span>
    </td>
   </tr>
    <td style="text-align:center;color: #ddd;">Category:</td>
    <td>
     <input type="radio" name="tuijian" id="recommend" value="recommend"/>
     <label for="recommend">Recommend</label>
     <input type="radio" name="tuijian" id="new" value="new"/>
     <label for="new">New</label>
     <input type="radio" name="tuijian" id="popular" value="popular" />
     <label for="popular">Popular</label>
    </td>
   </tr>
   <tr>
    <td style="text-align:center;color: #ddd;">Main Image：</td>
    <td>
     <input type="file" id="suoluetu" class="hide" value="" name="image" />
     <label for="suoluetu" class="labelBtnAdd">+</label>
    </td>
   </tr>
   
   <tr>
    <td style="text-align:center;color: #ddd;">Other Images:</td>
    <td>
     <input type="file"  multiple="multiple" id="chanpinzhutu" class="hide" value="" name="productOtherImage" />
     <label for="chanpinzhutu" class="labelBtn2">Upload</label>
    </td>
   </tr>
   <tr>
    <td style="text-align:center;color: #ddd;"></td>
    <td>
     <img src="#" width="80" height="80"/>
     <img src="#" width="80" height="80"/>
    </td>
   </tr>
   <tr>
    <td style="text-align:center;color: #ddd;">Description</td>
    <td><textarea class="textarea" name="productDescription"></textarea></td>
   </tr>
   <tr>
    <td style="text-align:center;color: #ddd;"></td>
    <td><input type="submit" value="Add New Product" class="tdBtn" name="addProductSubmit" /></td>
   </tr>
  </table>
  </form>
</div>

<script type="text/javascript">

   function showSelectValue(){
        var laptop=document.getElementsByName('detail_laptop');
        var selectvalue=document.product_editForm.productType.value;    
        if(selectvalue=='Laptop'){
            for(i=0;i<laptop.length;i++){
                laptop[i].style.display="";
  
            }
        }else{
            for(i=0;i<laptop.length;i++){
                laptop[i].style.display="none";
            }   
        }
        var mobile=document.getElementsByName('detail_mobile');  
        if(selectvalue=='Mobile'){
            for(i=0;i<mobile.length;i++){
                mobile[i].style.display="";
  
            }
        }else{
            for(i=0;i<mobile.length;i++){
                mobile[i].style.display="none";
            }   
        }
        var computer=document.getElementsByName('detail_computer');  
        if(selectvalue=='Computer'){
            for(i=0;i<computer.length;i++){
                computer[i].style.display="";
    
            }
        }else{
            for(i=0;i<laptop.length+1;i++){
                computer[i].style.display="none";
            }   
        }
        var camera=document.getElementsByName('detail_camera');  
        if(selectvalue=='Camera'){
            for(i=0;i<camera.length;i++){
                camera[i].style.display="";
  
            }
        }else{
            for(i=0;i<laptop.length;i++){
                camera[i].style.display="none";
            }   
        }
        var audiovideo=document.getElementsByName('detail_audio&video');  
        if(selectvalue=='Audio&Video'){
            for(i=0;i<audiovideo.length;i++){
                audiovideo[i].style.display="";
      
            }
        }else{
            for(i=0;i<audiovideo.length;i++){
                audiovideo[i].style.display="none";
            }   
        }
        var others=document.getElementsByName('detail_others');  
        if(selectvalue=='Others'){
            for(i=0;i<others.length;i++){
                others[i].style.display="";
  
            }
        }else{
            for(i=0;i<others.length;i++){
                others[i].style.display="none";
            }   
        }
       
   }
</script>