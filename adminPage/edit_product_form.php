 <div class="wrap">
  <div class="page-title">
    <span class="modular fl"><i class="add"></i><em>Edit/Add Product</em></span>
    <span class="modular fr"><a href="admin.php?content=adminPage/product_list" class="pt-link-btn">Product List</a></span>
  </div>
<form method="post" action="admin.php?content=adminPage/product_list">
  <table class="list-style">
   <tr>
    <td style="text-align:center;color: #ddd;">Name:</td>
    <td><input type="text" class="textBox length-long" name="productName" /></td>
   </tr>
   <tr>
    <td style="text-align:center;color: #ddd;">Brand:</td>
    <td><input type="text" class="textBox length-short" name="productBrand" /></td>
   </tr>
   <tr>
    <td style="text-align:center;color: #ddd;">Type:</td>
    <td>
     <select class="textBox" name="productType">
      <option value="Laptop">Laptop</option>
      <option value="Mobile">Mobile</option>
      <option value="Computer">Computer</option>
      <option value="Camera">Camera</option>
      <option value="Audio&Video">Audio&Video</option>
      <option value="Others">Others</option>
     </select>
    </td>
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
     <input type="checkbox" name="tuijian" id="recommend" value="" name="productRecommend" />
     <label for="recommend">Recommend</label>
     <input type="checkbox" name="tuijian" id="new" value="" name="productNew" />
     <label for="new">New</label>
     <input type="checkbox" name="tuijian" id="popular" value="" name="productPopular" />
     <label for="popular">Popular</label>
    </td>
   </tr>
   <tr>
    <td style="text-align:center;color: #ddd;">Main Image：</td>
    <td>
     <input type="file" id="suoluetu" class="hide" value="" name="productMainImage" />
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