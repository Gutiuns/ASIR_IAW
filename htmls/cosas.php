<?php

/*

NO OLVIDAR PONER ESTO

<?php session_start();?>

---
INPUTS

<input type="button">
<input type="checkbox">
<input type="color">
<input type="date">
<input type="datetime-local">
<input type="email">
<input type="file">
<input type="hidden">
<input type="image">
<input type="month">
<input type="number">
<input type="password">
<input type="radio">
<input type="range">
<input type="reset">
<input type="search">
<input type="submit">
<input type="tel">
<input type="text">
<input type="time">
<input type="url">
<input type="week">

EJEMPLOS

<form action="archivo.php" method="post" target="" enctype="" >
<input type="text" name="" value="" size="" maxlength="" disabled placeholder="" pattern=""/>
<input type="password" name=""  size="" maxlength="" placeholder=""/>

---

---patterns:

[a-z] = de la a a la z
{1,15} = de 1 a 15 letras


BOTONES

<input type="file" name="fichero" /> <br />
<input type="submit" name="buscar" value="a que no sabes qué hace" />
<input type="reset" name="limpiar" value="Limpiar" />

---
CHECKBOX

<input type="checkbox" name="array[]"  value=""/><label>nombre</label>
<input type="checkbox" name="array[]"  value=""/><label>nombre</label>
<input type="checkbox" name="array[]"  value="" checked="checked"/><label>nomre</label>

---
RADIO

<input type="radio" name="" value="" checked="cheked" /><label>nombre</label>
<input type="radio" name="" value="" /><label>nombre</label>
<input type="radio" name="" value="" /><label>nombre</label>
<input type="radio" name="" value="" /><label>nombre</label>

---

LISTA

<select name="" multiple="" size="">
  <option value="" selected=""></option>
  <option value=""></option>
  <option value=""></option>
  <option value=""></option>
</select>

---

TEXT AREA

<textarea name="" rows="" cols="" placeholder="">

---

LISTA 2

  <input list="(ID)">
  <datalist id="">
    <option value="">
    <option value="">
    <option value="">
    <option value="">
    <option value="">
  </datalist>

  --- 

  LISTA DESPLEGABLE CON GRUPOS

    <label for="(ID)"></label>
	<select id="" name="">
        <optgroup label="">
		    <option value="" selected=""></option>
			<option value=""></option>
			<option value=""></option>
			<option value=""></option>
		</optgroup>
		<optgroup label="">
			<option value="" selected=""></option>
			<option value=""></option>
			<option value=""></option>
			<option value=""></option>
			<option value=""></option>
		</optgroup>
	</select>

---------------------

    foreach($_POST as $i=>$c){
        if(is_array($_POST[$i])){  
            foreach($c as $in=>$co){
                $_SESSION[$i][$in]=$co;
            }
        }else{
            $_SESSION[$i]=$c;
        }      
    }
*/ 
?>