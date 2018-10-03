<?php

/* JOYASJoyasBundle:Factura:new.html.twig */
class __TwigTemplate_edb097818100ebc32f7c9315aa1685fb8af918d814d8e9022c98a161fcd7c5e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JOYASJoyasBundle::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JOYASJoyasBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "<h1>
        Nueva Factura
    </h1>
    <div class=\"span4 offset4\" id=\"msgwarn\" style=\"display: none;\">
        <div class=\"alert alert-block fade in alert-warning\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <h4>El CUIT/DNI buscado no existe, debera dar de alta al cliente.</h4>
        </div>
    </div>
    <div class=\"span4 offset4\" id=\"msgok\" style=\"display: none;\">
        <div class=\"alert alert-block fade in alert-success\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <h4>El cliente se ha dado de alta correctamente.</h4>
        </div>
    </div>
    <div class=\"joyas-container facturas\" style=\"width: 100% !important; margin: 0 auto;padding:0px;padding-top: 2%;padding-bottom: 2%;\">
        <div class=\"panel-body\">
            <!-- Nav tabs -->
            <ul class=\"nav nav-tabs\">
                <li class=\"active\" id=\"vercliente\"><a href=\"#clientemenu\" data-toggle=\"tab\" aria-expanded=\"true\">Datos del Cliente</a>
                </li>
                <li class=\"\" id=\"verfactura\" style=\"display: none;\"><a href=\"#factura\" data-toggle=\"tab\" aria-expanded=\"false\" onclick=\"vercondicion();\">Factura</a>
                </li>
            </ul>
            <div class=\"tab-content\" style=\"margin-top: 2%;\">
                <div class=\"tab-pane fade active in\" id=\"clientemenu\">
                    <div class=\"col-md-6\">
                        <label>Buscar Cliente ( Ingrese CUIT o DNI )</label>
                        <input placeholder=\"CUIT o DNI\" id=\"cuit\" />
                    </div>
                    <div class=\"col-md-6\">
                        <label>Indique condici&oacute;n ante el IVA</label>
                        <select id=\"condicioniva\">
                            <option value=\"0\">Seleccione..</option>
                            ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["condiciones"]) ? $context["condiciones"] : $this->getContext($context, "condiciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["condicion"]) {
            // line 37
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["condicion"]) ? $context["condicion"] : $this->getContext($context, "condicion")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["condicion"]) ? $context["condicion"] : $this->getContext($context, "condicion")), "descripcion"), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['condicion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                        </select>
                    </div>
                    <div class=\"col-md-12 text-center\">
                        <span id=\"strcliente0\" style=\"font-size: 18px;\"></span><br />
                        <a href=\"#\" class=\"btn btn-default\" onclick=\"vercliente();\">Buscar</a>
                    </div>
                    <div class=\"col-md-12 hidden\" id=\"altacliente\">
                        <div class=\"col-md-6\">
                            <label>Tpo de Documento (*)</label>
                            <select id=\"tipodocumento\">
                                <option value=\"0\">Seleccione..</option>
                                <option value=\"CUIT\">CUIT</option>
                                <option value=\"DNI\">DNI</option>
                            </select>
                        </div>
                        <div class=\"col-md-6\">
                            <label>Nro. Documento (*)</label>
                            <input type=\"number\" id=\"nrodocumento\" readonly=\"readonly\" />
                        </div>
                        <div class=\"col-md-6\">
                            <label>Raz&oacute;n Social (*)</label>
                            <input type=\"text\" id=\"razonsocial\" />
                        </div>
                        <div class=\"col-md-6\">
                            <label>Direcci&oacute;n</label>
                            <input type=\"text\" id=\"direccion\" />
                        </div>
                        <div class=\"col-md-6\">
                            <label>Tel&eacute;fono</label>
                            <input type=\"text\" id=\"telefono\" />
                        </div>
                        <div class=\"col-md-6\">
                            <label>E-mail</label>
                            <input type=\"text\" id=\"email\" />
                        </div>

                        <div class=\"col-md-12\">
                            <a href=\"#\" id=\"btAltaCliente\" class=\"btn btn-success\" onclick=\"altacliente();\">Dar de Alta</a>
                        </div>
                    </div>
                </div>
                <div class=\"tab-pane fade\" id=\"factura\">
                    <form action=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("factura_create");
        echo "\" method=\"POST\" id=\"form\" onKeypress=\"if (event.keyCode == 13) event.returnValue = false;\">
                        <div class=\"col-md-4\">
                            <label>
                                Cliente
                            </label>
                            <div style=\"margin-bottom: 10px;\">
                                <span id=\"strcliente\"></span>
                                <input type=\"hidden\" name=\"cliente\" id=\"cliente\" />
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <label>
                                Punto de Venta
                            </label>
                            <div style=\"margin-bottom: 10px;\">
                                <select name=\"puntoventa\" class=\"form-control\">
                                    ";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["puntos"]) ? $context["puntos"] : $this->getContext($context, "puntos")));
        foreach ($context['_seq'] as $context["_key"] => $context["punto"]) {
            // line 98
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["punto"]) ? $context["punto"] : $this->getContext($context, "punto")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["punto"]) ? $context["punto"] : $this->getContext($context, "punto")), "descripcion"), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['punto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <label>
                                Condici&oacute;n frente al IVA
                            </label>
                            <div style=\"margin-bottom: 10px;\">
                                <span id=\"strcondicioniva\"></span>
                                <input type=\"hidden\" name=\"condicionivafac\" id=\"condicionivafac\" />
                            </div>
                        </div>
                        <div class=\"col-md-4 iva\">
                            <label>
                                IVA
                            </label>
                            <br />
                            21%
                        </div>
                        <div style=\"col-md-12\">
                            <table class=\"table table-condensed ado\">
                                <thead>
                                    <tr>
                                        <th>
                                            C&oacute;digo
                                        </th>
                                        <th>
                                            Descripci&oacute;n
                                        </th>
                                        <th>
                                            Cantidad
                                        </th>
                                        <th>
                                            Precio U.
                                        </th>
                                        <th>
                                            Bonif. (%)
                                        </th>
                                        <th>
                                            Precio Bonif.
                                        </th>
                                        <th>
                                            Sub. Total
                                        </th>
                                        <th class=\"iva\">
                                            Sub. c/IVA
                                        </th>
                                        <th>
                                            Acci&oacute;n
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id=\"agregar\">
                                    <tr>
                                        <td>
                                            <input name=\"codigo0\" class=\"form-control\" id=\"codigo0\"/>
                                        </td>
                                        <td>
                                            <input name=\"descripcion0\" class=\"form-control\" id=\"descripcion0\" />
                                        </td>
                                        <td>
                                            <input name=\"cantidad0\" type=\"number\" onblur=\"calcularResultado();\" id=\"cantidad0\" />
                                        </td>
                                        <td>
                                            <input name=\"precio0\" class=\"precio\" id=\"precio0\" onblur=\"calcularResultado();\"/>
                                        </td>
                                        <td>
                                            <input name=\"bonif0\" id=\"bonif0\" value=\"0\" onblur=\"calcularResultado();\"/>
                                        </td>
                                        <td>
                                            <input name=\"preciobonif0\" readonly id=\"preciobonif0\" onblur=\"calcularResultado();\"/>
                                        </td>
                                        <td>
                                            <input name=\"subtotal0\" readonly id=\"subtotal0\" onblur=\"calcularResultado();\"/>
                                        </td>
                                        <td class=\"iva\">
                                            <input name=\"subtotaliva0\" readonly id=\"subtotaliva0\" onblur=\"calcularResultado();\"/>
                                        </td>
                                        <td>
                                            <a href=\"#\" onclick=\"borrarDatos();\" class=\"btn btn-danger\">Eliminar</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class=\"botones\" id=\"botones\">
                            <a class=\"btn btn-primary\" href=\"#\" onclick=\"agregar();\">
                                Agregar L&iacute;nea
                            </a>
                            <a class=\"btn btn-success\" href=\"#\" id=\"emitir\" onclick=\"comprobarDatos();\">
                                Emitir Factura
                            </a>
                            <a class=\"btn btn-default\" href=\"";
        // line 192
        echo $this->env->getExtension('routing')->getPath("factura");
        echo "\">
                                Volver
                            </a>
                        </div>
                        <div class=\"saldo\">
                            <table style=\"text-align: right\">
                                <tr class=\"iva\">
                                    <td>
                                        <strong>
                                            Importe Neto Gravado:
                                        </strong>
                                    </td>
                                    <td>
                                        <span id=\"subtotal\">
                                        </span>
                                    </td>
                                </tr>
                                <tr class=\"iva\">
                                    <td>
                                        <strong>
                                            IVA 21%:
                                        </strong>
                                    </td>
                                    <td>
                                        <span id=\"desc\">
                                        </span>
                                    </td>
                                <input id=\"resultadoiva\" name=\"resultadoiva\" type=\"hidden\" value=\"0\" />
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>
                                            Importe Total:
                                        </strong>
                                    </td>
                                    <td>
                                        <strong>
                                            <span id=\"resultado\">
                                            </span>
                                        </strong>
                                        <input id=\"resultadoFinal\" name=\"resultadoFinal\" type=\"hidden\" value=\"0\" />
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <input name=\"contador\" id=\"contador\" type=\"hidden\" value=\"1\"/>
                        <input name=\"tipo\" id=\"tipo\" type=\"hidden\" value=\"\"/>
                        <input name=\"tipofactura\" id=\"tipofactura\" type=\"hidden\" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        var contador = 1;
        var moneda = '\$';

        function borrarDatos() {
            \$('#cantidad0').val('');
            \$('#descripcion0').val('').removeAttr('readonly');
            \$('#codigo0').val('').removeAttr('readonly');
            \$('#precio0').val('');
            \$('#bonif0').val('');
            \$('#preciobonif0').val('');
            \$('#subtotal0').val('');
            \$('#subtotaliva0').val('');
            calcularResultado();
        }

        function comprobarDatos() {
            if (confirm('Esta seguro que desea confirmar la factura?')) {
                \$('#form').submit();
            }
        }

        function agregar() {
            \$(\"#agregar\").append('<tr id=\"lineaAgregada' + contador + '\">'
                    + '<td><input class=\"form-control\" name=\"codigo' + contador + '\" id=\"codigo' + contador + '\" />'
                    + '<td><input class=\"form-control\" name=\"descripcion' + contador + '\" id=\"descripcion' + contador + '\" />'
                    + '<td><input class=\"form-control\" name=\"cantidad' + contador + '\" type=\"text\" onblur=\"calcularResultado();\" id=\"cantidad' + contador + '\" required /></td>'
                    + '<td><input class=\"form-control\" name=\"precio' + contador + '\" class=\"precio\" id=\"precio' + contador + '\" required onblur=\"calcularResultado();\"/></td>'
                    + '<td><input class=\"form-control\" name=\"bonif' + contador + '\" id=\"bonif' + contador + '\" value=\"0\" required onblur=\"calcularResultado();\"/></td>'
                    + '<td><input class=\"form-control\" name=\"preciobonif' + contador + '\" readonly id=\"preciobonif' + contador + '\" required onblur=\"calcularResultado();\"/></td>'
                    + '<td><input class=\"form-control\" name=\"subtotal' + contador + '\" readonly id=\"subtotal' + contador + '\" required onblur=\"calcularResultado();\"/></td>'
                    + '<td class=\"iva\"><input class=\"form-control\" name=\"subtotaliva' + contador + '\" readonly id=\"subtotaliva' + contador + '\" required onblur=\"calcularResultado();\"/></td>'
                    + '<td><a onclick=\"borrarLinea(' + contador + ')\" class=\"btn btn-danger\">Eliminar</a></td>'
                    + '</tr>');

            contador = contador + 1;
            var cond = \$('#condicioniva option:selected').text();
            if (cond == 'Responsable Inscripto') {
                \$('.iva').removeClass('hidden');
            } else {
                \$('.iva').addClass('hidden');
            }
            \$('#contador').val(contador);
        }

        function borrarLinea(cont) {
            var id = '#lineaAgregada' + cont;
            \$(id).remove();
            calcularResultado();
        }
        function calcularResultado() {
            var total = 0;
            var subtotallinea = 0;
            var subtotal = 0;
            for (i = 0; i < contador; i++) {
                if (typeof \$('#precio' + i).val() === \"undefined\") {
                } else {
                    if (\$('#precio' + i).val() != '') {
                        subtotallinea = (\$('#precio' + i).val() * \$('#cantidad' + i).val() * (1 - (\$('#bonif' + i).val() / 100)));
                        var preciobon = \$('#precio' + i).val() * (1 - (\$('#bonif' + i).val() / 100));
                        \$('#preciobonif' + i).val(preciobon.toFixed(2));
                        \$('#subtotal' + i).val(subtotallinea.toFixed(2));
                        var subIva = subtotallinea.toFixed(2) * 1.21;
                        \$('#subtotaliva' + i).val(subIva.toFixed(2));
                        subtotal = parseFloat(subtotal) + parseFloat(\$('#subtotal' + i).val());
                    }
                }
            }

            subtotal = Math.round(100 * subtotal) / 100;

            \$('#subtotal').html(moneda + ' ' + subtotal);
            var resiva = subtotal * 0.21;
            resiva = Math.round(100 * resiva) / 100;
            \$('#desc').html(moneda + ' ' + resiva);
            \$('#resultadoiva').html(resiva);
            var cond = \$('#condicioniva option:selected').text();
            if (cond == 'Responsable Inscripto') {
                total = parseFloat(subtotal) + resiva;
            } else {
                total = parseFloat(subtotal);
            }

            total = Math.round(100 * total) / 100;
            \$('#resultado').html(moneda + ' ' + total);
            \$('#resultadoFinal').val(total);
        }

        \$('#condicioniva').change(function () {
            if (\$('#condicioniva').val() != 0 && \$('#cliente').val() != '') {
                var cond = \$('#condicioniva option:selected').text();
                \$('#strcondicioniva').html(cond);
                \$('#condicionivafac').val(cond);
                \$('#verfactura').css('display', 'block');
                if (cond == 'Responsable Inscripto') {
                    \$('.iva').removeClass('hidden');
                    \$('#tipofactura').val('A');
                } else {
                    \$('.iva').addClass('hidden');
                    \$('#tipofactura').val('B');
                }
            } else {
                \$('#strcondicioniva').html('');
                \$('#condicionivafac').val('');
                \$('#verfactura').css('display', 'none');
                \$('#vercliente').addClass('active');
            }
        });
        \$('#cuit').blur(function(){
            if(\$('#cuit').val() != \"\"){
                vercliente()
            }
        });
        \$(document).ready(function () {
            \$('input').blur(function () {
                var str = \$(this).val();
                \$(this).val(str.replace(\",\", \".\"));
                calcularResultado();
            });
            \$('.desb').removeAttr('readonly');
            \$('#btAltaCliente').click(function () {
               \$(this).addClass('hidden');
            });
        });
        function vercondicion() {
            var cond = \$('#condicioniva option:selected').text();
            if (cond == 'Responsable Inscripto') {
                \$('#tipofactura').val('A');
            } else {
                \$('#tipofactura').val('B');
            }
        }
        function vercliente() {
            var val = \$('#cuit').val();
            \$.post('";
        // line 380
        echo $this->env->getExtension('routing')->getPath("factura_vercliente");
        echo "', {data: val})
                    .done(function (data) {
                        if (data != '0///0') {
                            var res = data.split(\"///\");
                            \$('#cliente').val(res[0]);
                            \$('#strcliente').html(res[1]);
                            \$('#strcliente0').html('<strong>' + res[1] + '</strong>');

                            if (\$('#condicioniva').val() != 0) {
                                var cond = \$('#condicioniva option:selected').text();
                                \$('#strcondicioniva').html(cond);
                                \$('#condicionivafac').val(cond);
                                \$('#verfactura').css('display', 'block');
                            } else {
                                \$('#verfactura').css('display', 'none');
                                \$('#vercliente').addClass('active');
                            }
                            \$('#altacliente').addClass('hidden');
                        } else {
                            \$('#verfactura').css('display', 'none');
                            \$('#vercliente').addClass('active');
                            \$('#strcliente0').html('');
                            \$('#cliente').val('');
                            \$('#razonsocial').val('');
                            \$('#email').val('');
                            \$('#msgwarn').show();
                            \$('#altacliente').removeClass('hidden');
                            \$('#btAltaCliente').removeClass('hidden');
                            \$('#nrodocumento').val(\$('#cuit').val())
                        }
                    });

        }
        function altacliente() {
            var tipodocumento = \$('#tipodocumento').val();
            var nrodocumento = \$('#nrodocumento').val();
            var direccion = \$('#direccion').val();
            var razon = \$('#razonsocial').val();
            var telef = \$('#telefono').val();
            var email = \$('#email').val();
            if (tipodocumento != 0 && nrodocumento != '' && razon != '') {
                \$.post('";
        // line 421
        echo $this->env->getExtension('routing')->getPath("factura_altacliente");
        echo "', {data: tipodocumento, data1: nrodocumento, data2: direccion, data3: razon, data4: telef, data5: email})
                        .done(function (data) {
                            if (data != 0) {
                                \$('#msgwarn').css('display', 'none');
                                \$('#msgok').show();
                                vercliente(data);
                            } else {
                                alert('Error en el alta, datos erroneos');
                            }
                        });
            }
        }

    </script>
    <style>

        .form-control {
            padding: 6px 2px !important;
        }

        .nav-tabs>li{
            margin-bottom: -2px;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "JOYASJoyasBundle:Factura:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 421,  445 => 380,  254 => 192,  160 => 100,  149 => 98,  145 => 97,  126 => 81,  82 => 39,  71 => 37,  67 => 36,  31 => 2,  28 => 1,);
    }
}
