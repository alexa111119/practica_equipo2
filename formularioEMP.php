<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="http://localhost/practica_equipo2/css/formularioEMP.css">
  <title>Formulario empresa</title>
</head>
<body>

  <h1>Formulario empresa</h1>

  <section class="form-register">
    
    <label class="">
      <p>Nombre de la empresa *</p>
      <input class="controls" type="text" name="nombre_emp" id="nombre_emp" placeholder="Ingrese el nombre de la empresa">
    </label>

    <label class="">
      <p>RNC *</p>
      <input class="controls" type="text" name="rnc" id="rnc" placeholder="Ingrese RNC">
    </label>

    <label class="">
      <p>¿Desea que se conozca la identidad de su empresa? *</p>
      <input class="checkboxs" type="radio" name="identidad" id="identidadsi" value="si"> SI<br>
      <input class="checkboxs" type="radio" name="identidad" id="identidadno" value="no"> NO
    </label>

    <label class="">
      <p>¿Dispone su empresa de un Departamento de Formación dentro de la empresa? *</p>
      <input class="checkboxs" type="radio" name="dispone" id="DFsi" value="si"> SI<br>
      <input class="checkboxs" type="radio" name="dispone" id="DFno" value="no"> NO
    </label>

    <label class="">
    <p>Alcance de la empresa *</p>
      <input class="checkboxs" type="radio" name="alcance" id="ALCANCEnac"> Nacional/Local<br>
      <input class="checkboxs" type="radio" name="alcance" id="ALCANCEmult"> Multinacional
    </label>

    <label class="">
      <p>Actividad económica a la que se dedica la empresa *</p>
      <textarea placeholder="Actividad económica a la que se dedica la empresa" cols="50" rows="10"></textarea>
    </label>

    <label class="">
    <p>Industria *</p>
      <select required="" data-error="Por favor seleccione su curso." name="industria">
      <option value=""></option>
      <option value="agricola">Agrícola</option>
      <option value="comercio">Comercio</option>
      <option value="ganaderia">Ganadería</option>
      <option value="indextraccion">Industria de Extracción</option>
      <option value="indmanufactura">Industria de Manufactura</option>
      <option value="servicio">Servicio</option>
      <option value="otra">Otra</option></select>
    </label>

    <label class="">
      <p>Tamaño de la Empresa *</p>
      <select required="" data-error="Por favor seleccione su curso." name="tamano">
      <option value=""></option>
      <option value="micro">Micro</option>
      <option value="pequena">Peque&ntilde;a</option>
      <option value="mediana">Mediana</option>
      <option value="grande">Grande</option></select>
    </label>

    <label class="">
      <p>Dirección *</p>
      <input class="controls" type="text" name="direccion" id="direccion">

      <p>Sector *</p>
      <input class="controls" type="text" name="sector" id="sector">

      <p>Sección</p>
      <input class="controls" type="text" name="seccion" id="seccion">

      <p>Municipio</p>
      <input class="controls" type="text" name="municipio" id="municipio">
    </label>


    <label class="">
      <P>Provincia *</P>
        <select class="form-control" name="provincia_id">
          <option value="1">Azua</option>
          <option value="2">Bahoruco</option>
          <option value="3">Barahona</option>
          <option value="4">Dajab&oacute;n</option>
          <option value="5">Distrito Nacional</option>
          <option value="6">Duarte</option>
          <option value="8">El Seibo</option>
          <option value="7">El&iacute;as Pi&ntilde;a</option>
          <option value="9">Espaillat</option>
          <option value="10">Hato Mayor</option>
          <option value="11">Hermanas Mirabal</option>
          <option value="12">Independencia</option>
          <option value="13">La Altagracia</option>
          <option value="14">La Romana</option>
          <option value="15">La Vega</option>
          <option value="16">Mar&iacute;a Trinidad S&aacute;nchez</option>
          <option value="17">Monse&ntilde;or Nouel</option>
          <option value="18">Monte Cristi</option>
          <option value="19">Monte Plata</option>
          <option value="20">Pedernales</option>
          <option value="21">Peravia</option>
          <option value="22">Puerto Plata</option>
          <option value="23">Saman&aacute;</option>
          <option value="25">San Crist&oacute;bal</option>
          <option value="26">San Jos&eacute; de Ocoa</option>
          <option value="27">San Juan</option>
          <option value="28">San Pedro de Macor&iacute;s</option>
          <option value="24">S&aacute;nchez Ram&iacute;rez</option>
          <option value="29">Santiago</option>
          <option value="30">Santiago Rodr&iacute;guez</option>
          <option value="31">Santo Domingo</option>
          <option value="32">Valverde</option></select>
    </label>

    <label class="">
      <p>País donde opera la empresa *</p>
      <input name="pais_id" type="hidden" value="65">
      <select class="form-control" required="" data-error="Por favor ingrese su nacionalidad." name="pais_id">
        <div>
        <option value="1">Afganist&aacute;n</option>S
        <option value="3">Albania</option>
        <option value="4">Alemania</option>
        <option value="5">Andorra</option>
        <option value="6">Angola</option>
        <option value="7">Anguilla</option>
        <option value="8">Ant&aacute;rtida</option>
        <option value="9">Antigua y Barbuda</option>
        <option value="10">Antillas Holandesas</option>
        <option value="11">Arabia Saud&iacute;</option>
        <option value="12">Argelia</option>
        <option value="13">Argentina</option>
        <option value="14">Armenia</option>
        <option value="15">Aruba</option>
        <option value="131">ARY Macedonia</option>
        <option value="16">Australia</option>
        <option value="17">Austria</option>
        <option value="18">Azerbaiy&aacute;n</option>
        <option value="19">Bahamas</option>
        <option value="20">Bahr&eacute;in</option>
        <option value="21">Bangladesh</option>
        <option value="22">Barbados</option>
        <option value="24">B&eacute;lgica</option>
        <option value="25">Belice</option>
        <option value="26">Benin</option>
        <option value="27">Bermudas</option>
        <option value="28">Bhut&aacute;n</option>
        <option value="23">Bielorrusia</option>
        <option value="29">Bolivia</option>
        <option value="30">Bosnia y Herzegovina</option>
        <option value="31">Botsuana</option>
        <option value="33">Brasil</option>
        <option value="34">Brun&eacute;i</option>
        <option value="35">Bulgaria</option>
        <option value="36">Burkina Faso</option>
        <option value="37">Burundi</option>
        <option value="38">Cabo Verde</option>
        <option value="40">Camboya</option>
        <option value="41">Camer&uacute;n</option>
        <option value="42">Canad&aacute;</option>
        <option value="44">Chad</option>
        <option value="46">Chile</option>
        <option value="47">China</option>
        <option value="48">Chipre</option>
        <option value="50">Ciudad del Vaticano</option>
        <option value="52">Colombia</option>
        <option value="53">Comoras</option>
        <option value="55">Congo</option>
        <option value="57">Corea del Norte</option>
        <option value="58">Corea del Sur</option>
        <option value="59">Costa de Marfil</option>
        <option value="60">Costa Rica</option>
        <option value="61">Croacia</option>
        <option value="62">Cuba</option>
        <option value="63">Dinamarca</option>
        <option value="64">Dominica</option>
        <option value="66">Ecuador</option>
        <option value="67">Egipto</option>
        <option value="68">El Salvador</option>
        <option value="69">Emiratos &Aacute;rabes Unidos</option>
        <option value="70">Eritrea</option>
        <option value="71">Eslovaquia</option>
        <option value="72">Eslovenia</option>
        <option value="73">Espa&ntilde;a</option>
        <option value="75">Estados Unidos</option>
        <option value="76">Estonia</option>
        <option value="77">Etiop&iacute;a</option>
        <option value="79">Filipinas</option>
        <option value="80">Finlandia</option>
        <option value="81">Fiyi</option>
        <option value="82">Francia</option>
        <option value="83">Gab&oacute;n</option>
        <option value="84">Gambia</option>
        <option value="85">Georgia</option>
        <option value="87">Ghana</option>
        <option value="88">Gibraltar</option>
        <option value="89">Granada</option>
        <option value="90">Grecia</option>
        <option value="91">Groenlandia</option>
        <option value="92">Guadalupe</option>
        <option value="93">Guam</option>
        <option value="94">Guatemala</option>
        <option value="95">Guayana Francesa</option>
        <option value="96">Guinea</option>
        <option value="97">Guinea Ecuatorial</option>
        <option value="98">Guinea-Bissau</option>
        <option value="99">Guyana</option>
        <option value="100">Hait&iacute;</option>
        <option value="102">Honduras</option>
        <option value="103">Hong Kong</option>
        <option value="104">Hungr&iacute;a</option>
        <option value="105">India</option>
        <option value="106">Indonesia</option>
        <option value="107">Ir&aacute;n</option>
        <option value="108">Iraq</option>
        <option value="109">Irlanda</option>
        <option value="32">Isla Bouvet</option>
        <option value="49">Isla de Navidad</option>
        <option value="161">Isla Norfolk</option>
        <option value="110">Islandia</option>
        <option value="39">Islas Caim&aacute;n</option>
        <option value="51">Islas Cocos</option>
        <option value="56">Islas Cook</option>
        <option value="78">Islas Feroe</option>
        <option value="86">Islas Georgias del Sur y Sandwich del Sur</option>
        <option value="2">Islas Gland</option>
        <option value="101">Islas Heard y McDonald</option>
        <option value="138">Islas Malvinas</option>
        <option value="139">Islas Marianas del Norte</option>
        <option value="141">Islas Marshall</option>
        <option value="174">Islas Pitcairn</option>
        <option value="186">Islas Salom&oacute;n</option>
        <option value="223">Islas Turcas y Caicos</option>
        <option value="74">Islas ultramarinas de Estados Unidos</option>
        <option value="234">Islas V&iacute;rgenes Brit&aacute;nicas</option>
        <option value="235">Islas V&iacute;rgenes de los Estados Unidos</option>
        <option value="111">Israel</option>
        <option value="112">Italia</option>
        <option value="113">Jamaica</option>
        <option value="114">Jap&oacute;n</option>
        <option value="115">Jordania</option>
        <option value="116">Kazajst&aacute;n</option>
        <option value="117">Kenia</option>
        <option value="118">Kirguist&aacute;n</option>
        <option value="119">Kiribati</option>
        <option value="120">Kuwait</option>
        <option value="121">Laos</option>
        <option value="122">Lesotho</option>
        <option value="123">Letonia</option>
        <option value="124">L&iacute;bano</option>
        <option value="125">Liberia</option>
        <option value="126">Libia</option>
        <option value="127">Liechtenstein</option>
        <option value="128">Lituania</option>
        <option value="129">Luxemburgo</option>
        <option value="130">Macao</option>
        <option value="132">Madagascar</option>
        <option value="133">Malasia</option>
        <option value="134">Malawi</option>
        <option value="135">Maldivas</option>
        <option value="136">Mal&iacute;</option>
        <option value="137">Malta</option>
        <option value="140">Marruecos</option
        ><option value="142">Martinica</option>
        <option value="143">Mauricio</option>
        <option value="144">Mauritania</option>
        <option value="145">Mayotte</option>
        <option value="146">M&eacute;xico</option>
        <option value="147">Micronesia</option>
        <option value="148">Moldavia</option>
        <option value="149">M&oacute;naco</option>
        <option value="150">Mongolia</option>
        <option value="151">Montserrat</option>
        <option value="152">Mozambique</option>
        <option value="153">Myanmar</option>
        <option value="154">Namibia</option>
        <option value="155">Nauru</option>
        <option value="156">Nepal</option>
        <option value="157">Nicaragua</option>
        <option value="158">N&iacute;ger</option>
        <option value="159">Nigeria</option>
        <option value="160">Niue</option>
        <option value="162">Noruega</option>
        <option value="163">Nueva Caledonia</option>
        <option value="164">Nueva Zelanda</option>
        <option value="165">Om&aacute;n</option>
        <option value="166">Pa&iacute;ses Bajos</option>
        <option value="167">Pakist&aacute;n</option>
        <option value="168">Palau</option>
        <option value="169">Palestina</option>
        <option value="170">Panam&aacute;</option>
        <option value="171">Pap&uacute;a Nueva Guinea</option>
        <option value="172">Paraguay</option>
        <option value="173">Per&uacute;</option>
        <option value="175">Polinesia Francesa</option>
        <option value="176">Polonia</option>
        <option value="177">Portugal</option>
        <option value="178">Puerto Rico</option>
        <option value="179">Qatar</option>
        <option value="180">Reino Unido</option>
        <option value="43">Rep&uacute;blica Centroafricana</option>
        <option value="45">Rep&uacute;blica Checa</option>
        <option value="54">Rep&uacute;blica Democr&aacute;tica del Congo</option>
        <option value="65" selected="selected">Rep&uacute;blica Dominicana</option>
        <option value="181">Reuni&oacute;n</option>
        <option value="182">Ruanda</option>
        <option value="183">Rumania</option>
        <option value="184">Rusia</option>
        <option value="185">Sahara Occidental</option>
        <option value="187">Samoa</option>
        <option value="188">Samoa Americana</option>
        <option value="189">San Crist&oacute;bal y Nevis</option>
        <option value="190">San Marino</option>
        <option value="191">San Pedro y Miquel&oacute;n</option>
        <option value="192">San Vicente y las Granadinas</option>
        <option value="193">Santa Helena</option>
        <option value="194">Santa Luc&iacute;a</option>
        <option value="195">Santo Tom&eacute; y Pr&iacute;ncipe</option>
        <option value="196">Senegal</option>
        <option value="197">Serbia y Montenegro</option>
        <option value="198">Seychelles</option>
        <option value="199">Sierra Leona</option>
        <option value="200">Singapur</option>
        <option value="201">Siria</option>
        <option value="202">Somalia</option>
        <option value="203">Sri Lanka</option>
        <option value="204">Suazilandia</option>
        <option value="205">Sud&aacute;frica</option>
        <option value="206">Sud&aacute;n</option>
        <option value="207">Suecia</option>
        <option value="208">Suiza</option>
        <option value="209">Surinam</option>
        <option value="210">Svalbard y Jan Mayen</option>
        <option value="211">Tailandia</option>
        <option value="212">Taiw&aacute;n</option>
        <option value="213">Tanzania</option>
        <option value="214">Tayikist&aacute;n</option>
        <option value="215">Territorio Brit&aacute;nico del Oc&eacute;ano &Iacute;ndico</option>
        <option value="216">Territorios Australes Franceses</option>
        <option value="217">Timor Oriental</option>
        <option value="218">Togo</option>
        <option value="219">Tokelau</option>
        <option value="220">Tonga</option>
        <option value="221">Trinidad y Tobago</option>
        <option value="222">T&uacute;nez</option>
        <option value="224">Turkmenist&aacute;n</option>
        <option value="225">Turqu&iacute;a</option>
        <option value="226">Tuvalu</option>
        <option value="227">Ucrania</option>
        <option value="228">Uganda</option>
        <option value="229">Uruguay</option>
        <option value="230">Uzbekist&aacute;n</option>
        <option value="231">Vanuatu</option>
        <option value="232">Venezuela</option>
        <option value="233">Vietnam</option>
        <option value="236">Wallis y Futuna</option>
        <option value="237">Yemen</option>
        <option value="238">Yibuti</option>
        <option value="239">Zambia</option>
        <option value="240">Zimbabue</option>
        </div>
      </select>
    </label>


    <label class="">
      <p>Teléfono Principal *</p>
      <input placeholder="" class="controls" required="" data-error="Por favor ingrese su tel&eacute;fono principal." name="telefono" type="text">
    </label>

    <label class="">
      <p>eléfono Directo</p>
      <input placeholder="" class="controls" data-error="Por favor ingrese su tel&eacute;fono directo." name="telefono_directo" type="text">
    </label>

<div class="form-group col-md-12">
    <label class="control-label col-xs-3" for="email">Email *</label>
    <div class="col-xs-3">
        <input placeholder="" class="form-control" required="" data-error="Por favor ingrese su email." name="email" type="email">
    </div>
    <label class="control-label col-xs-3" for="email">Confirmación de Email *</label>
    <div class="col-xs-3">
        <input placeholder="" class="form-control" required="" data-error="Por favor ingrese su email." name="" type="email" value="">
    </div>
</div>                        <div class="form-group col-md-12">
                            <label class="control-label col-xs-3" for="inputContraseña">Elija una contraseña *</label>
                            <div class="col-xs-3">
                                <input id="password" placeholder="" class="form-control" required="" data-error="Por favor ingrese su contrase&ntilde;a." name="password" type="password" value="">
                            </div>
                            <label class="control-label col-xs-3" for="inputContraseña2">Confirme contraseña *</label>
                            <div class="col-xs-3">
                                <input id="password_confirmation" placeholder="" class="form-control" required="" data-error="Por favor ingrese su contrase&ntilde;a." name="password_confirmation" type="password" value="">
                            </div>
                        </div>


  </section>

</body>
</html>