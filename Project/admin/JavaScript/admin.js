var count = 0;

function addRow() {
    var div = document.createElement('div');

    div.className = 'row';

    div.innerHTML = '<div id="menu_list">\ <input type="text" name="addfood" placeholder="Add Food Here" class="add_food_here">\
   <div class="veg">\
       <input type="radio" name="veg-'+count+'" class="veg_input" checked>\
       <label class="forveglabel">Veg</label>\
   </div>\
   <div class="non-veg">\
       <input type="radio" name="veg-'+count+'" class="nonveg_input">\
       <label class="fornonveglabel">Non-Veg</label>\
   </div>\
   <input type="text" name="" id="" placeholder="Food Price" class="total">\
   <input type="file" class="total" >\
   <input type="button" class="edit" value="Edit">\
   <input type="button" class="closeit" onclick="removeRow(this)" value="X">\</div>';

    document.getElementById('add_food').append(div);
    count++;
}

function removeRow(input) {
    input.parentNode.remove();
}