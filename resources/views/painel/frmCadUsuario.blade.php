 @include('painel/header')

<?php
use App\Models\Form;
$objForm = new Form();

$objForm->sb_FormBegin('Cadastro de usuários', 'frmCadCliente', 'salvar-usuario');
?>
@csrf

<?php
$objForm->sb_FormText('Nome', 'name', 'Defina um nome para ser reconhecido no sistema', '800px', '', true);

$objForm->sb_FormTextEmail('Usuário / email', 'email', 'Defina um nome ou use seu email para logar no sistema', '800px', '', true);

$objForm->sb_FormPassword('Escolha uma senha', 'password','Escolha uma senha para logar no painel', '500px', '', true);

$form = '';
$opcaoNivel[] = "<option value='1' >Administrador</option>";
$opcaoNivel[] .= "<option value='2' >Usuário</option>";

$objForm->sb_FormSelect('Nível acesso', 'nivel_acesso', $opcaoNivel, '250px', true);

$objForm->sb_FormImagemCrop('Imagem', 'imagem');

$objForm->sb_FormSubmit('Salvar');




$objForm->sb_FormEnd();


?>

<script>

    $(document).ready(function(){
        reader.readAsDataURL(input.files[0]);
        $(".imgPreview").show();
    });

    function preview(input){
        if (input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#jcrop').attr('src', e.target.result).width(100),
                cropImg()
            };
            reader.readAsDataURL(input.files[0]);
            $(".imgPreview").show();
        }
    };
    function cropImg(){
        $('#jcrop').Jcrop({
            onChange: updateCoords,
             onSelect: updateCoords,
                    bgColor         : 'white',
            minSize         : [ 100, 100 ],
            maxSize         : [ 100, 100 ],
            setSelect       : [ 0, 0, 100, 100 ],
            bgOpacity       : .3,
            borderOpacity   : .9,
            allowResize	: true,
            aspectRatio: 100/100
         });
    };
    function updateCoords(c)
            {
                $('#x').val(c.x);
                $('#y').val(c.y);
                $('#w').val(c.w);
                $('#h').val(c.h);
            };
</script>


 <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>All form elements <small>With custom checbox and radion elements.</small></h5>
                        </div>
                        <div class="ibox-content">
                            <form method="get">

                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Normal</label>

                                    <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Help text</label>
                                    <div class="col-sm-10"><input type="text" class="form-control"> <span class="form-text m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Password</label>

                                    <div class="col-sm-10"><input type="password" class="form-control" name="password"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Placeholder</label>

                                    <div class="col-sm-10"><input type="text" placeholder="placeholder" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-lg-2 col-form-label">Disabled</label>

                                    <div class="col-lg-10"><input type="text" disabled="" placeholder="Disabled input here..." class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-lg-2 col-form-label">Static control</label>

                                    <div class="col-lg-10"><p class="form-control-static">email@example.com</p></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Checkboxes and radios <br/>
                                    <small class="text-navy">Normal Bootstrap elements</small></label>

                                    <div class="col-sm-10">
                                        <div><label> <input type="checkbox" value=""> Option one is this and that&mdash;be sure to include why it's great </label></div>
                                        <div><label> <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Option one is this and that&mdash;be sure to
                                            include why it's great </label></div>
                                        <div><label> <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Option two can be something else and selecting it will
                                            deselect option one </label></div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Inline checkboxes</label>

                                    <div class="col-sm-10"><label> <input type="checkbox" value="option1" id="inlineCheckbox1"> a </label> <label class="checkbox-inline">
                                        <input type="checkbox" value="option2" id="inlineCheckbox2"> b </label> <label>
                                        <input type="checkbox" value="option3" id="inlineCheckbox3"> c </label></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Checkboxes &amp; radios <br/><small class="text-navy">Custom elements</small></label>

                                    <div class="col-sm-10">
                                        <div class="i-checks"><label> <input type="checkbox" value=""> <i></i> Option one </label></div>
                                        <div class="i-checks"><label> <input type="checkbox" value="" checked=""> <i></i> Option two checked </label></div>
                                        <div class="i-checks"><label> <input type="checkbox" value="" disabled="" checked=""> <i></i> Option three checked and disabled </label></div>
                                        <div class="i-checks"><label> <input type="checkbox" value="" disabled=""> <i></i> Option four disabled </label></div>
                                        <div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> Option one </label></div>
                                        <div class="i-checks"><label> <input type="radio" checked="" value="option2" name="a"> <i></i> Option two checked </label></div>
                                        <div class="i-checks"><label> <input type="radio" disabled="" checked="" value="option2"> <i></i> Option three checked and disabled </label></div>
                                        <div class="i-checks"><label> <input type="radio" disabled="" name="a"> <i></i> Option four disabled </label></div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Inline checkboxes</label>

                                    <div class="col-sm-10"><label class="checkbox-inline i-checks"> <input type="checkbox" value="option1">a </label>
                                        <label class="i-checks"> <input type="checkbox" value="option2"> b </label>
                                        <label class="i-checks"> <input type="checkbox" value="option3"> c </label></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Select</label>

                                    <div class="col-sm-10"><select class="form-control m-b" name="account">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                    </select>

                                        <div class="col-lg-4 m-l-n"><select class="form-control" multiple="">
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                        </select></div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row has-success"><label class="col-sm-2 col-form-label">Input with success</label>

                                    <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row has-warning"><label class="col-sm-2 col-form-label">Input with warning</label>

                                    <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group  row has-error"><label class="col-sm-2 col-form-label">Input with error</label>

                                    <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Control sizing</label>

                                    <div class="col-sm-10"><input type="text" placeholder=".form-control-lg" class="form-control form-control-lg m-b">
                                        <input type="text" placeholder="Default input" class="form-control m-b"> <input type="text" placeholder=".form-control-sm" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Column sizing</label>

                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-2"><input type="text" placeholder=".col-md-2" class="form-control"></div>
                                            <div class="col-md-3"><input type="text" placeholder=".col-md-3" class="form-control"></div>
                                            <div class="col-md-4"><input type="text" placeholder=".col-md-4" class="form-control"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Input groups</label>

                                    <div class="col-sm-10">
                                        <div class="input-group m-b">
                                            <div class="input-group-prepend">
                                                <span class="input-group-addon">@</span>
                                            </div>
                                            <input type="text" placeholder="Username" class="form-control">
                                        </div>
                                        <div class="input-group m-b">
                                            <input type="text" class="form-control">
                                            <div class="input-group-append">
                                                <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        <div class="input-group m-b">
                                            <div class="input-group-prepend">
                                                <span class="input-group-addon">$</span>
                                            </div>
                                            <input type="text" class="form-control">
                                            <div class="input-group-append">
                                                <span class="input-group-addon">.00</span>
                                            </div>
                                        </div>
                                        <div class="input-group m-b">
                                            <div class="input-group-prepend">
                                                <span class="input-group-addon">
                                                <input type="checkbox">
                                                    </span>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group m-b">
                                            <div class="input-group-prepend">
                                                <span class="input-group-addon">
                                                <input type="radio">
                                                    </span>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Button addons</label>

                                    <div class="col-sm-10">

                                        <div class="input-group m-b"><span class="input-group-prepend">
                                            <button type="button" class="btn btn-primary">Go!</button> </span> <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group"><input type="text" class="form-control"> <span class="input-group-append"> <button type="button" class="btn btn-primary">Go!
                                        </button> </span></div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">With dropdowns</label>

                                    <div class="col-sm-10">
                                        <div class="input-group m-b">
                                            <div class="input-group-prepend">
                                                <button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button">Action </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                             <input type="text" class="form-control"></div>
                                        <div class="input-group"><input type="text" class="form-control">

                                            <div class="input-group-append">
                                                <button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button">Action </button>
                                                <ul class="dropdown-menu float-right">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Segmented</label>

                                    <div class="col-sm-10">
                                        <div class="input-group m-b">
                                            <div class="input-group-prepend">
                                                <button tabindex="-1" class="btn btn-white" type="button">Action</button>
                                                <button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button"></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                            <input type="text" class="form-control"></div>
                                        <div class="input-group"><input type="text" class="form-control">

                                            <div class="input-group-append">
                                                <button tabindex="-1" class="btn btn-white" type="button">Action</button>
                                                <button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button"></button>
                                                <ul class="dropdown-menu float-right">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="dropdown-divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="submit">Cancel</button>
                                        <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

@include('painel/footer')


