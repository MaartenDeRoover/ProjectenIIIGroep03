<?php

/* modules/ubercart/uc_order/templates/uc-order-invoice.html.twig */
class __TwigTemplate_f19fe413b48ff57783c0f8aba333a1eb6b432bf362f3bbe1c5a39465ad625e1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 43, "for" => 199);
        $filters = array("t" => 70);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 39
        echo "<table width=\"95%\" border=\"0\" cellspacing=\"0\" cellpadding=\"1\" align=\"center\" bgcolor=\"#006699\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
  <tr>
    <td>
      <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"5\" align=\"center\" bgcolor=\"#FFFFFF\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
        ";
        // line 43
        if ((isset($context["business_header"]) ? $context["business_header"] : null)) {
            // line 44
            echo "        <tr valign=\"top\">
          <td>
            <table width=\"100%\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
              <tr>
                <td>
                  ";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo "
                </td>
                <td width=\"98%\">
                  <div style=\"padding-left: 1em;\">
                  <span style=\"font-size: large;\">";
            // line 53
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["store_name"]) ? $context["store_name"] : null), "html", null, true));
            echo "</span><br />
                  ";
            // line 54
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
            echo "
                  </div>
                </td>
                <td nowrap=\"nowrap\">
                  ";
            // line 58
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["store_address"]) ? $context["store_address"] : null), "html", null, true));
            echo "<br />";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["store_phone"]) ? $context["store_phone"] : null), "html", null, true));
            echo "
                </td>
              </tr>
            </table>
          </td>
        </tr>
        ";
        }
        // line 65
        echo "
        <tr valign=\"top\">
          <td>

            ";
        // line 69
        if ((isset($context["thank_you_message"]) ? $context["thank_you_message"] : null)) {
            // line 70
            echo "            <p><b>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Thanks for your order, @order_first_name!", array("@order_first_name" => (isset($context["order_first_name"]) ? $context["order_first_name"] : null)))));
            echo "</b></p>

            ";
            // line 72
            if ($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "data", array()), "new_user_name", array())) {
                // line 73
                echo "            <p><b>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("An account has been created for you with the following details:")));
                echo "</b></p>
            <p><b>";
                // line 74
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Username:")));
                echo "</b> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["order_new_username"]) ? $context["order_new_username"] : null), "html", null, true));
                echo "<br />
            <b>";
                // line 75
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Password:")));
                echo "</b> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["order_new_password"]) ? $context["order_new_password"] : null), "html", null, true));
                echo "</p>
            ";
            }
            // line 77
            echo "
            <p><b>";
            // line 78
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Want to manage your order online?")));
            echo "</b><br />
            ";
            // line 79
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("If you need to check the status of your order, please visit our home page at @store_link and click on \"My account\" in the menu or login with the following link:", array("@store_link" => (isset($context["store_link"]) ? $context["store_link"] : null)))));
            echo "
            <br /><br />";
            // line 80
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["site_login_link"]) ? $context["site_login_link"] : null), "html", null, true));
            echo "</p>
            ";
        }
        // line 82
        echo "
            <table cellpadding=\"4\" cellspacing=\"0\" border=\"0\" width=\"100%\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
              <tr>
                <td colspan=\"2\" bgcolor=\"#006699\" style=\"color: white;\">
                  <b>";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Purchasing Information:")));
        echo "</b>
                </td>
              </tr>
              <tr>
                <td nowrap=\"nowrap\">
                  <b>";
        // line 91
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("E-mail Address:")));
        echo "</b>
                </td>
                <td width=\"98%\">
                  ";
        // line 94
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["order_email"]) ? $context["order_email"] : null), "html", null, true));
        echo "
                </td>
              </tr>
              <tr>
                <td colspan=\"2\">

                  <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
                    <tr>
                      <td valign=\"top\" width=\"50%\">
                        <b>";
        // line 103
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Billing Address:")));
        echo "</b><br />
                        ";
        // line 104
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["order_billing_address"]) ? $context["order_billing_address"] : null), "html", null, true));
        echo "<br />
                        <br />
                        <b>";
        // line 106
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Billing Phone:")));
        echo "</b><br />
                        ";
        // line 107
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["order_billing_phone"]) ? $context["order_billing_phone"] : null), "html", null, true));
        echo "<br />
                      </td>
                      ";
        // line 109
        if ((isset($context["shippable"]) ? $context["shippable"] : null)) {
            // line 110
            echo "                      <td valign=\"top\" width=\"50%\">
                        <b>";
            // line 111
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Shipping Address:")));
            echo "</b><br />
                        ";
            // line 112
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["order_shipping_address"]) ? $context["order_shipping_address"] : null), "html", null, true));
            echo "<br />
                        <br />
                        <b>";
            // line 114
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Shipping Phone:")));
            echo "</b><br />
                        ";
            // line 115
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["order_shipping_phone"]) ? $context["order_shipping_phone"] : null), "html", null, true));
            echo "<br />
                      </td>
                      ";
        }
        // line 118
        echo "                    </tr>
                  </table>

                </td>
              </tr>
              <tr>
                <td nowrap=\"nowrap\">
                  <b>";
        // line 125
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Order Grand Total:")));
        echo "</b>
                </td>
                <td width=\"98%\">
                  <b>";
        // line 128
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["order_total"]) ? $context["order_total"] : null), "html", null, true));
        echo "</b>
                </td>
              </tr>

              ";
        // line 132
        if ((isset($context["order_payment_method"]) ? $context["order_payment_method"] : null)) {
            // line 133
            echo "              <tr>
                <td nowrap=\"nowrap\">
                  <b>";
            // line 135
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Payment Method:")));
            echo "</b>
                </td>
                <td width=\"98%\">
                  ";
            // line 138
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["order_payment_method"]) ? $context["order_payment_method"] : null), "html", null, true));
            echo "
                </td>
              </tr>
              ";
        }
        // line 142
        echo "
              <tr>
                <td colspan=\"2\" bgcolor=\"#006699\" style=\"color: white;\">
                  <b>";
        // line 145
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Order Summary:")));
        echo "</b>
                </td>
              </tr>

              ";
        // line 149
        if ((isset($context["shippable"]) ? $context["shippable"] : null)) {
            // line 150
            echo "              <tr>
                <td colspan=\"2\" bgcolor=\"#EEEEEE\">
                  <font color=\"#CC6600\"><b>";
            // line 152
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Shipping Details:")));
            echo "</b></font>
                </td>
              </tr>
              ";
        }
        // line 156
        echo "
              <tr>
                <td colspan=\"2\">

                  <table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"100%\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
                    <tr>
                      <td nowrap=\"nowrap\">
                        <b>";
        // line 163
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Order #:")));
        echo "</b>
                      </td>
                      <td width=\"98%\">
                        ";
        // line 166
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["order_link"]) ? $context["order_link"] : null), "html", null, true));
        echo "
                      </td>
                    </tr>

                    <tr>
                      <td nowrap=\"nowrap\">
                        <b>";
        // line 172
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Order Date: ")));
        echo "</b>
                      </td>
                      <td width=\"98%\">
                        ";
        // line 175
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["order_created"]) ? $context["order_created"] : null), "html", null, true));
        echo "
                      </td>
                    </tr>

                    ";
        // line 179
        if (((isset($context["shipping_method"]) ? $context["shipping_method"] : null) && (isset($context["shippable"]) ? $context["shippable"] : null))) {
            // line 180
            echo "                    <tr>
                      <td nowrap=\"nowrap\">
                        <b>";
            // line 182
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Shipping Method:")));
            echo "</b>
                      </td>
                      <td width=\"98%\">
                        ";
            // line 185
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["order_shipping_method"]) ? $context["order_shipping_method"] : null), "html", null, true));
            echo "
                      </td>
                    </tr>
                    ";
        }
        // line 189
        echo "
                    <tr>
                      <td nowrap=\"nowrap\">
                        ";
        // line 192
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Products Subtotal:")));
        echo "&nbsp;
                      </td>
                      <td width=\"98%\">
                        ";
        // line 195
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["order_subtotal"]) ? $context["order_subtotal"] : null), "html", null, true));
        echo "
                      </td>
                    </tr>

                    ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["line_items"]) ? $context["line_items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ((($this->getAttribute($context["item"], "type", array()) != "subtotal") && ($this->getAttribute($context["item"], "type", array()) != "total"))) {
                // line 200
                echo "
                    <tr>
                      <td nowrap=\"nowrap\">
                        ";
                // line 203
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                echo ":
                      </td>
                      <td>
                        ";
                // line 206
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "formatted_amount", array()), "html", null, true));
                echo "
                      </td>
                    </tr>

                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "
                    <tr>
                      <td>&nbsp;</td>
                      <td>------</td>
                    </tr>

                    <tr>
                      <td nowrap=\"nowrap\">
                        <b>";
        // line 219
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Total for this Order:")));
        echo "&nbsp;</b>
                      </td>
                      <td>
                        <b>";
        // line 222
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["order_total"]) ? $context["order_total"] : null), "html", null, true));
        echo "</b>
                      </td>
                    </tr>

                    <tr>
                      <td colspan=\"2\">
                        <br /><br /><b>";
        // line 228
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Products on order:")));
        echo "&nbsp;</b>

                        <table width=\"100%\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">

                          ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 233
            echo "                          <tr>
                            <td valign=\"top\" nowrap=\"nowrap\">
                              <b>";
            // line 235
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["product"], "qty", array()), "html", null, true));
            echo " x </b>
                            </td>
                            <td width=\"98%\">
                              <b>";
            // line 238
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["product"], "title", array()), "html", null, true));
            echo " - ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["product"], "total_price", array()), "html", null, true));
            echo "</b>
                              ";
            // line 239
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["product"], "individual_price", array()), "html", null, true));
            echo "<br />
                              ";
            // line 240
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("SKU")));
            echo ": ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["product"], "model", array()), "html", null, true));
            echo "<br />
                              ";
            // line 241
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["product"], "details", array()), "html", null, true));
            echo "
                            </td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        echo "                        </table>

                      </td>
                    </tr>
                  </table>

                </td>
              </tr>

              ";
        // line 254
        if ((((isset($context["help_text"]) ? $context["help_text"] : null) || (isset($context["email_text"]) ? $context["email_text"] : null)) || (isset($context["store_footer"]) ? $context["store_footer"] : null))) {
            // line 255
            echo "              <tr>
                <td colspan=\"2\">
                  <hr noshade=\"noshade\" size=\"1\" /><br />

                  ";
            // line 259
            if ((isset($context["help_text"]) ? $context["help_text"] : null)) {
                // line 260
                echo "                  <p><b>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Where can I get help with reviewing my order?")));
                echo "</b><br />
                  ";
                // line 261
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("To learn more about managing your orders on @store_link, please visit our <a href=\"@store_help_url\">help page</a>.", array("@store_link" => (isset($context["store_link"]) ? $context["store_link"] : null), "@store_help_url" => (isset($context["store_help_url"]) ? $context["store_help_url"] : null)))));
                echo "
                  <br /></p>
                  ";
            }
            // line 264
            echo "
                  ";
            // line 265
            if ((isset($context["email_text"]) ? $context["email_text"] : null)) {
                // line 266
                echo "                  <p>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Please note: This e-mail message is an automated notification. Please do not reply to this message.")));
                echo "</p>

                  <p>";
                // line 268
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Thanks again for shopping with us.")));
                echo "</p>
                  ";
            }
            // line 270
            echo "
                  ";
            // line 271
            if ((isset($context["store_footer"]) ? $context["store_footer"] : null)) {
                // line 272
                echo "                  <p><b>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["store_link"]) ? $context["store_link"] : null), "html", null, true));
                echo "</b><br /><b>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "</b></p>
                  ";
            }
            // line 274
            echo "                </td>
              </tr>
              ";
        }
        // line 277
        echo "
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "modules/ubercart/uc_order/templates/uc-order-invoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  518 => 277,  513 => 274,  505 => 272,  503 => 271,  500 => 270,  495 => 268,  489 => 266,  487 => 265,  484 => 264,  478 => 261,  473 => 260,  471 => 259,  465 => 255,  463 => 254,  452 => 245,  442 => 241,  436 => 240,  432 => 239,  426 => 238,  420 => 235,  416 => 233,  412 => 232,  405 => 228,  396 => 222,  390 => 219,  380 => 211,  368 => 206,  362 => 203,  357 => 200,  352 => 199,  345 => 195,  339 => 192,  334 => 189,  327 => 185,  321 => 182,  317 => 180,  315 => 179,  308 => 175,  302 => 172,  293 => 166,  287 => 163,  278 => 156,  271 => 152,  267 => 150,  265 => 149,  258 => 145,  253 => 142,  246 => 138,  240 => 135,  236 => 133,  234 => 132,  227 => 128,  221 => 125,  212 => 118,  206 => 115,  202 => 114,  197 => 112,  193 => 111,  190 => 110,  188 => 109,  183 => 107,  179 => 106,  174 => 104,  170 => 103,  158 => 94,  152 => 91,  144 => 86,  138 => 82,  133 => 80,  129 => 79,  125 => 78,  122 => 77,  115 => 75,  109 => 74,  104 => 73,  102 => 72,  96 => 70,  94 => 69,  88 => 65,  76 => 58,  69 => 54,  65 => 53,  58 => 49,  51 => 44,  49 => 43,  43 => 39,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/ubercart/uc_order/templates/uc-order-invoice.html.twig", "/var/www/html/modules/ubercart/uc_order/templates/uc-order-invoice.html.twig");
    }
}
