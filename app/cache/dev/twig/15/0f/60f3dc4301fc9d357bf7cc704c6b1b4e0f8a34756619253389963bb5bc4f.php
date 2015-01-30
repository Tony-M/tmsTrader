<?php

/* TmsTraderBundle:Default:index.html.twig */
class __TwigTemplate_150f60f3dc4301fc9d357bf7cc704c6b1b4e0f8a34756619253389963bb5bc4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("TmsTraderBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'graph1' => array($this, 'block_graph1'),
            'my_orders' => array($this, 'block_my_orders'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TmsTraderBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 6
        $this->displayBlock('graph1', $context, $blocks);
        // line 21
        echo "            ";
        $this->displayBlock('my_orders', $context, $blocks);
        // line 129
        echo "        </div>
    </div>


";
    }

    // line 6
    public function block_graph1($context, array $blocks = array())
    {
        // line 7
        echo "                <div class=\"col-xs-6\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Текущее состояние
                        </div>
                        <div class=\"panel-body\">
                            ";
        // line 14
        echo "
                            </iframe>
                        </div>
                    </div>
                </div>

            ";
    }

    // line 21
    public function block_my_orders($context, array $blocks = array())
    {
        // line 22
        echo "                <script>
                    var trader = null;
                    \$(document).ready(function () {
                        trader = new tmsTrader();
                    });
                </script>
                <div class=\"col-xs-6\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Ордера
                            <div style=\"float: right;\">
                                <div class=\"btn-group btn-group-xs\" role=\"group\"
                                     aria-label=\"Extra-small button group\">
                                    <a class=\"btn btn-primary btn-xs\" onclick=\"trader.openAllOrders()\">Запустить все</a>
                                    <a class=\"btn btn-danger btn-xs\" onclick=\"trader.closeAllOrders()\">Отменить все!</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel-body\">
                            <table class=\"table table-condansed\" id=\"my_orders\">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Валюта</th>
                                    <th>Объем</th>
                                    <th>Курс</th>
                                    <th>Операция</th>
                                    <th colspan=\"2\">Действия</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                            <table class=\"table table-condansed\" id=\"order_tpl\" style=\"display: none\">
                                <tbody>
                                <tr>
                                    <td>
                                        <div class=\"label label-default orderid_label\"></div>
                                        <input type=\"hidden\" value=\"\" class=\"orderid\">
                                    </td>
                                    <td>
                                        <select class=\"tms_inp_text ordercurrency\" style=\"width: auto;\">
                                            <option value=\"none\"></option>
                                            <option value=\"LTC\">LTC</option>
                                            <option value=\"RUR\">RUR</option>
                                        </select>
                                    </td>
                                    <td>
                                        <div class=\"form-group\">
                                            <input class=\"tms_inp_text ordervalue\" type=\"text\">
                                        </div>
                                    </td>

                                    <td>
                                        <div class=\"form-group\">
                                            <input class=\"tms_inp_text orderprice\" type=\"text\">
                                        </div>
                                    </td>
                                    <td>
                                        <select class=\"tms_inp_text ordertype\" style=\"width: auto;\">
                                            <option value=\"none\"></option>
                                            <option value=\"ask\" class=\"ask\">Продать</option>
                                            <option value=\"bid\" class=\"bid\">Купить</option>
                                        </select>
                                    </td>

                                    <td>
                                        <div class=\"btn-group btn-group-xs\" role=\"group\"
                                             aria-label=\"Extra-small button group\">

                                            <input class=\"tms_inp_text orderstep hidden\"
                                                   style=\"float: left; ;width:50px\" type=\"text\">

                                            <button type=\"button\" class=\"btn btn-default orderstep_up hidden\"><span
                                                        class=\"glyphicon glyphicon-chevron-up\"
                                                        aria-hidden=\"true\"></span>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-default orderstep_down hidden\"><span
                                                        class=\"glyphicon glyphicon-chevron-down\"
                                                        aria-hidden=\"true\"></span>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-primary order_go\">Go</button>
                                            <button type=\"button\" class=\"btn btn-danger order_stop hidden\">Stop</button>
                                        </div>


                                    </td>
                                    <td>
                                        <div class=\"btn-group btn-group-xs\" role=\"group\"
                                             aria-label=\"Extra-small button group\">
                                            <button type=\"button\" class=\"btn btn-danger orderrm\"><span
                                                        class=\"glyphicon glyphicon-minus\" aria-hidden=\"true\"></button>
                                            <button type=\"button\" class=\"btn btn-default orderadd\"><span
                                                        class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                                            </button>

                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            ";
    }

    public function getTemplateName()
    {
        return "TmsTraderBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  79 => 21,  69 => 14,  61 => 7,  58 => 6,  50 => 129,  47 => 21,  45 => 6,  41 => 4,  38 => 3,  11 => 1,);
    }
}
