<br>
<div class='container mt-5 text-center'>
    <div class="card card-body mt-4 col-8 mx-auto">
        <div class="card-header bg-dark text-white">
            <h1>Editar perfil</h1>
        </div><br>
        <form method='post'>
        <!--Botões radio  dos avatares-->

           <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="avatarP" class="custom-control-input" value='dice-d20' <?=$avatar=='dice-d20'?'checked':''?>>
                <label class="custom-control-label" for="customRadioInline1" ><i class="fas fa-dice-d20 fa-2x"></i></label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="avatarP" class="custom-control-input" value='chess' <?=$avatar=='chess'?'checked':''?>>
                <label class="custom-control-label" for="customRadioInline2"><i class="fas fa-chess fa-2x"></i></label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline3" name="avatarP" class="custom-control-input" value='cookie-bite' <?=$avatar=='cookie-bite'?'checked':''?>>
                <label class="custom-control-label" for="customRadioInline3"><i class="fas fa-cookie-bite fa-2x"></i></label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline4" name="avatarP" class="custom-control-input" value='ghost' <?=$avatar=='ghost'?'checked':''?>>
                <label class="custom-control-label" for="customRadioInline4"><i class="fas fa-ghost fa-2x"></i></label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline5" name="avatarP" class="custom-control-input" value='dragon' <?=$avatar=='dragon'?'checked':''?>>
                <label class="custom-control-label" for="customRadioInline5"><i class="fas fa-dragon fa-2x"></i></label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline6" name="avatarP" class="custom-control-input" value='yin-yang' <?=$avatar=='yin-yang'?'checked':''?>>
                <label class="custom-control-label" for="customRadioInline6"><i class="fas fa-yin-yang fa-2x"></i></label>
            </div>
            <!--Botões radio  dos avatares-->
              
            <div class='form-group text-left '>
                <label for=''>Nome:</label><br>
                <input name='nome' class="form-control" type="text" value='<?=$nome?>'>
            </div>
            
            <div class='form-group text-left '>
                <label for=''>E-mail:</label><br>
                <input class="form-control" type="email" value='<?=$email?>' readonly>
            </div>

            <div class='form-group text-left '>
                <label for="">Senha atual:</label><br>
                <input name='senhaAtual' type="password" class="form-control">
            </div>

            <div class='form-group text-left '>
                <label for="">Nova senha:</label><br>
                <input name='novaSenha' class="form-control" type="password">
            </div>

            <div class='text-center'>
                <button class='btn btn-dark text-white' type="submit" name='adicionar'>Salvar</button>
                <input  type="hidden" name='hidden'>
            </div>
        </form>
    </div>
</div><br>