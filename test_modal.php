        <script src= "../../js/jquery/jquery-1.11.3.min.js"></script>
<!-- Подключение bootstrap-->         
 <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>   
 <script src="../../vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>     
    <link href="css/AntiKrim_view.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript">
$(document).ready (function () {
$("#kard_sravnenie_dok").appendTo("body").modal('show');
});

</script>

        <button type="button" id="CARTA_CLIENT" data-toggle="modal" href= "#kard_sravnenie_dok" class="btn btn-primary">документ</button>

         
<div id="kard_sravnenie_dok" class="modal fade ModalRemove" tabindex="-1" role="dialog">
    <div class="modal-dialog mddd">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">
<div class="column col-md-6 col-sm-6 col-xs-6"> 
<label>Полученые данные по клиенту</label>
	<label>Наименование/ФИО </label></td><td><input type="text" size="50" class ="input-sm"></td>
	<td><label>Террорист </label></td>
	<td><input type="text" value="" size="15" class ="input-sm"></td>
	<label for="name_param">Категория </label></td>
	<input type="text" name="edit_name" value="" id="name_param" size="15" class ="input-sm"></td>
<br>
	<td><label>ИНН </label></td><td><input type="text" id="n/fio" class ="input-sm"></td>
	<td><label>ОКПО </label></td><td><input type="text" value="" class ="input-sm"></td>
	<td><label for="name_param">Рег.номер </label></td>
	<td><input type="text" name="edit_name" value="" id="name_param" class ="input-sm"></td>
	<td><label for="name_param">Дата.рег </label></td>
	<td><select name=""></select></td>
<br>
	<td><label>адрес регистрации </label></td>
	<td><label>OKATO </label></td><td><input type="text" value="" size="5" class ="input-sm"></td>
	<td><label for="name_param">Регион </label></td><td><input type="text" class ="input-sm"></td>	
	<td><label for="name_param">нас.пункт </label></td><td><input type="text" class ="input-sm"></td>
	<td><label for="name_param">ОКСМ </label></td><td><input type="text" class ="input-sm"></td> <br>
	<td><label for="name_param">улица </label></td><td><input type="text" class ="input-sm"></td>
	<td><label for="name_param" >дом </label></td><td><input type="text"size="5" class ="input-sm"></td>
	<td><label for="name_param" >корп </label></td><td><input type="text"size="5" class ="input-sm"></td>
	<td><label for="name_param" >кв </label></td><td><input type="text" size="5" class ="input-sm"></td>
	<td><label for="name_param">терр-я </label></td><td><input type="text" class ="input-sm"></td>
<br>
	<td><label>место нахождения </label></td>
	<td><label>OKATO </label></td><td><input type="text" value="" size="5" class ="input-sm"></td>
	<td><label for="name_param">Регион </label></td><td><input type="text" class ="input-sm"></td>	
	<td><label for="name_param">нас.пункт </label></td><td><input type="text" class ="input-sm"></td>
	<td><label for="name_param">ОКСМ </label></td><td><input type="text" class ="input-sm"></td>
<br>
	<td><label for="name_param">улица </label></td><td><input type="text" class ="input-sm"></td> 
	<td><label for="name_param" >дом </label></td><td><input type="text"size="5" class ="input-sm"></td>
	<td><label for="name_param" >корп </label></td><td><input type="text"size="5" class ="input-sm"></td>
	<td><label for="name_param" >кв </label></td><td><input type="text"size="5" class ="input-sm"></td>
	<td><label for="name_param" >ИПДЛ </label></td><td><input type="text" class ="input-sm"></td>
<br>
	<td><label>Документ </label></td><td><input type="text" class ="input-sm"></td>
	<td><label>Серия </label></td><td><input type="text" value="" size="5" class ="input-sm"></td>
	<td><label for="name_param">Номер </label></td>
	<td><input type="text" name="edit_name" value="" id="name_param" size="10" class ="input-sm"></td>
	<td><label for="name_param">Дата рождения </label></td>
	<td><input type="text" name="edit_name" value="" id="name_param" size="15" class ="input-sm"></td>
<br>
	<td><label>Дата выдачи </label></td><td><input type="text" class ="input-sm"></td>
	<td><label>Кем выдан </label></td>
	<td><textarea cols="20" rows="1" class ="input-sm"></textarea></td>
	<td><label for="name_param">Место рожд </label></td>
	<td><textarea cols="20" rows="1" class ="input-sm"></textarea></td>
	<td><label for="name_param">Дата.рег </label></td>
	<td><input type="text" name="edit_name" value="" id="name_param" class ="input-sm"></td>
<br>
	<td><label>Док., подтв. право преб. в РФ </label></td><td><input type="text" class ="input-sm"></td>
	<td><label>Серия и № </label></td>
	<td><input type="text" name="edit_name" value="" id="name_param" size="10" class ="input-sm"></td>
	<td><label for="name_param">Дата нач </label></td>
	<td><input type="text" name="edit_name" value="" id="name_param" size="10" class ="input-sm"></td>
	<td><label for="name_param">Дата ок. </label></td>
	<td><input type="text" name="edit_name" value="" id="name_param" size="10" class ="input-sm"></td>
<br>
	<td><label>Миграц. карта № </label></td><td><input type="text" class ="input-sm"></td>

	<td><label for="name_param">Дата нач </label></td>
	<td><input type="text" name="edit_name" value="" id="name_param" class ="input-sm"></td>
	<td><label for="name_param">Дата ок. </label></td>
	<td><input type="text" name="edit_name" value="" id="name_param" class ="input-sm"></td>	
	<td><input value="Сохранить как новую" type="button" /></td>
<br>


</div>
<div class="column col-md-6 col-sm-6 col-xs-6">
<td><label>Карточка клиента в системе AntiKrim</label></td><br>
	<td><label>Наименование/ФИО </label></td>
	<td><input type="text" id="n/fio" size="50" class ="input-sm"></td><td><label>Террорист </label></td>
	<td><input type="text" value="" class ="input-sm"></td>
	<td><label for="name_param">Категория </label></td>
	<td><input type="text" name="edit_name" value="" id="name_param" class ="input-sm"></td>
<br>
	<td><label>ИНН </label></td><td><input type="text" id="n/fio" class ="input-sm"></td>
	<td><label>ОКПО </label></td><td><input type="text" value="" class ="input-sm"></td>
	<td><label for="name_param">Рег.номер </label></td>
	<td><input type="text" name="edit_name" value="" id="name_param" class ="input-sm"></td>
	<td><label for="name_param">Дата.рег </label></td>
	<td><select name=""></select></td>
<br>
	<td><label>адрес регистрации </label></td>
	<td><label>OKATO </label></td><td><input type="text" value="" class ="input-sm"></td>
	<td><label for="name_param">Регион </label></td><td><input type="text" class ="input-sm"></td>	
	<td><label for="name_param">нас.пункт </label></td><td><input type="text" class ="input-sm"></td>
	<td><label for="name_param">ОКСМ </label></td><td><input type="text" class ="input-sm"></td> <br>
	<td><label for="name_param">улица </label></td><td><input type="text" class ="input-sm"></td>
	<td><label for="name_param">дом </label></td><td><input type="text" size="5" class ="input-sm"></td>
	<td><label for="name_param">корп </label></td><td><input type="text" size="5" class ="input-sm"></td>
	<td><label for="name_param">кв </label></td><td><input type="text" size="5" class ="input-sm"></td>
	<td><label for="name_param">терр-я </label></td><td><input type="text" class ="input-sm"></td>
<br>
	<td><label>место нахождения </label></td>
	<td><label>OKATO </label></td><td><input type="text" value="" class ="input-sm"></td>
	<td><label for="name_param">Регион </label></td><td><input type="text" class ="input-sm"></td>	
	<td><label for="name_param">нас.пункт </label></td><td><input type="text" class ="input-sm"></td>
	<td><label for="name_param">ОКСМ </label></td><td><input type="text" class ="input-sm"></td>
	<td><label for="name_param"></label></td><td><input type="text" class ="input-sm"></td> <br>
	<td><label for="name_param">улица </label></td><td><input type="text"></td> 
	<td><label for="name_param">дом </label></td><td><input type="text" size="5" class ="input-sm"></td>
	<td><label for="name_param">корп </label></td><td><input type="text" size="5" class ="input-sm"></td>
	<td><label for="name_param">кв </label></td><td><input type="text" size="5" class ="input-sm"></td>
	<td><label for="name_param">ИПДЛ </label></td><td><input type="text" size="5" class ="input-sm"></td>
<br>
	<td><label>Документ </label></td><td><input type="text" class ="input-sm"></td>
	<td><label>Серия </label></td><td><input type="text" value="" class ="input-sm"></td>
	<td><label for="name_param">Номер </label></td>
	<td><input type="text" name="edit_name" value="" id="name_param" class ="input-sm"></td>
	<td><label for="name_param">Дата рождения </label></td>
	<td><select name=""></select></td>
<br>
	<td><label>Дата выдачи </label></td><td><input type="text" class ="input-sm"></td>
	<td><label>Кем выдан </label></td>
	<td><textarea cols="20" rows="1" class ="input-sm"></textarea></td>
	<td><label for="name_param">Место рожд </label></td>
	<td><textarea cols="20" rows="1" class ="input-sm"></textarea></td>
	<td><label for="name_param">Дата.рег </label></td>
	<td><input type="text" name="edit_name" value="" id="name_param" class ="input-sm"></td>
<br>
	<td><label>Док., подтв. право преб. в РФ </label></td><td><input type="text"/></td>
	<td><label>Серия и № </label></td>
	<td><input type="text" name="edit_name" value="" id="name_param" size="5" class ="input-sm"></td>
	<td><label for="name_param">Дата нач </label></td>
	<td><input type="text" name="edit_name" value="" id="name_param" size="5" class ="input-sm"></td>
	<td><label for="name_param">Дата ок. </label></td>
	<td><input type="text" name="edit_name" value="" id="name_param" size="5" class ="input-sm"></td>
<br>
	<td><label>Миграц. карта № </label></td><td><input type="text"size="5" class ="input-sm"></td>
	<td><label for="name_param">Дата нач </label></td>
	<td><input type="text" name="edit_name" value="" id="name_param" size="5" class ="input-sm"></td>
	<td><label for="name_param">Дата ок. </label></td>
	<td><input type="text" name="edit_name" value="" id="name_param" size="5" class ="input-sm"></td>	
	<td><input value="Сохранить как новую" type="button" /></td>
</div>            
 
            </div>
     <div class="modal-footer">
            <label for="name_param">№ клиента </label>
            <button type="button" data-dismiss="modal" class="btn btn-default">Не менять</button>
            <button type="button" class="btn btn-primary">Заменить</button>
     </div>
      </div>     
          </div>     
</div>