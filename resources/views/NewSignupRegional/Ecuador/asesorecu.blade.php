
<div class="row" align="center">
    <div class="col-lg-12">
        <div class="alert alert-dismissible fade show" role="alert" style="color: #fff; background-color: #A2DADA !important;border-color: #A2DADA !important;">
            <strong>
                <div class="custom-control custom-checkbox mr-3">
                    <label for="info_bank" class="switch s-icons s-outline s-outline-info" style="margin-left: 20px !important;">
                        <input type="checkbox" name="info_bank" id="info_bank" onchange="check_bank()">
                        <span class="slider round"></span>
                    </label>
                    <br>
                    <label>{{ __('auth.info_bank') }}</label>

                </div>
            </strong>
        </div>
    </div>
</div>
<div class="row" id="check_bank" hidden="true">
    <div class="col-md-6" id="">
        <label for="bank_name"> <b>{{ __('auth.name_bank') }}</b></label>
        <select id="bank_name" name="bank_name" class="form-control" onchange="bank(this.value);">
            <option value="">{{ __('auth.selbankname') }}</option>
        </select>
    </div>

    <div class="col-md-6" id="">
        <label for="type_Account"> <b>TIPO DE CUENTA</b></label>
        <select id="type_Account" name="type_Account" class="form-control" onchange="ValidateBanks();">
            <option value="">{{ __('auth.selbankname') }}</option>
            <option value="5">Ahorros</option>
            <option value="6">Corriente</option>
            
        </select>
    </div>
    
    <div class="col-md-6" id="numberaccount">
        <label for="number_account"><span style="color: red !important;">*</span> <b>{{ __('auth.number_account') }}</b></label>
        <input type="text" id="number_account" name="number_account" class="form-control">
    </div>

    

</div>

<br>
<div class="row" align="center" id="cotitularoptions">
    <div class="col-lg-12">
        <div class="alert alert-dismissible fade show" role="alert" style="color: #fff; background-color: #A2DADA !important;border-color: #A2DADA !important;">
            <strong>
                <div class="custom-control custom-checkbox mr-3">
                    <label for="info_cotitular" class="switch s-icons s-outline s-outline-info" style="margin-left: 20px !important;">
                        <input type="checkbox" name="info_cotitular" id="info_cotitular" onchange="check_cotitular()">
                        <span class="slider round"></span>
                    </label>
                    <br>
                    <label>{{ __('auth.info_cotitular') }}</label>

                </div>
            </strong>
        </div>
    </div>
</div>
<div class="row" id="check_coti" hidden="true">

    <div class="col-md-12">
        <label for="name_cotitular"><span style="color: red !important;">*</span> <b>Apellidos y Nombres Completos del Cotitular</b></label>
        <input type="text" id="name_cotitular" name="name_cotitular" class="form-control">
    </div>

    <div class="col-md-6" id="typedocumentscoti">
      <label for="typedocumentcoti"><span style="color: red !important;">*</span> <b>Tipo de Documento:</b></label>
      <select id="typedocumentcoti" name="typedocumentcoti" class="form-control" >
        <option value="">Selecciona Tu Documento</option>
        
    </select>
</div>
<div class="col-md-6">
    <label for="numer_document_cotitular"><span style="color: red !important;">*</span> <b>Número de Documento</b></label>
    <input type="text" id="numer_document_cotitular" name="numer_document_cotitular" minlength="8" maxlength="13" class="form-control">
</div>


    

</div>
<br>

<script type="text/javascript">
    function bank(banco){
        var divnumaccount = document.getElementById('numberaccount');
        var divcci = document.getElementById('cci');
        
        if (banco == 46) {
            divnumaccount.removeAttribute('hidden',true);
            divcci.setAttribute('hidden',true);
        }else{
            divcci.removeAttribute('hidden',true);
            divnumaccount.setAttribute('hidden',true);
            
        }

    }
    function ValidateBanks(){
        var banco=document.getElementById('bank_name').value;
       // alert(banco);
        
        var num_cuenta = document.getElementById('number_account');
        var type_acount = document.getElementById('type_Account');
        alert(type_acount);
        if (banco == 46) {
            if (type_acount == 5) {
                num_cuenta.maxLength = "14"
                
            }else{
                num_cuenta.maxLength = "13"
            }

            
        }
    }
</script>