<div class="block">
       <div class="title1">
           <h3><i class="fa fa-user-lock"></i> Block user </h3>
           <i   class="fa fa-window-close fa-lg" onclick="popBack()"></i>
       </div>
       <div class="block-contain">
       <div class="para">
           <p>
               Select the following reason for user block
           </p>
           
               
               <div class="con">
                    <input type="checkbox" name="condition1" value="Breaks user aggreement" id="1">
                    <label for="1">Breaks user aggreement</label>
                </div>
                <div class="con">
                    <input type="checkbox" value="Complain about post" name="condition2" id="2">
                    <label for="2">Complain about post</label>
                </div>
                <div class="con">
                    <input type="checkbox" value="Complaine about profile"  name="condition3" id="3">
                    <label for="3">Complaine about profile</label>
                </div>
                <div class="con">
                    <input type="checkbox" value="Unauthorised sales"  name="condition4" id="4">
                    <label for="4">Unauthorised sales</label>
                </div>
                <div class="con"> 
                    <input type="checkbox" value="Vialate user condition" name="condition5" id="5">
                    <label for="5">Vialate user condition</label>
                </div>
                    <h4>Other write the following feild</h4>
                <div class="con">
                    <input placeholder="Other condition" type="text" name="condition6" id="6">
                </div>
                <input type="hidden" name="email" value="<?php echo $row['email']; ?>">
                <input type="hidden" name="level" value="<?php echo $row['level']; ?>">
                <div class="btn"><button type="submit" name="block"><i class="fa fa-ban"></i> Block</button></div>
           </form>
       </div>
       <div class="details">
           <h3 id="id">User Id    : </h3>
           <h3 id="email">User Email :</h3>
       </div>
       </div>

   </div>