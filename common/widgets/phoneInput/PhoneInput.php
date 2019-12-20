<?php namespace common\widgets\phoneInput;

use yii\bootstrap\Html;
use yii\bootstrap\InputWidget;

class PhoneInput extends InputWidget
{
    /**
     * @var string
     */
    public $type = 'text';

    public function run()
    {
        $this->registerClientScript();
        if ($this->hasModel()) {
            echo Html::activeInput($this->type, $this->model, $this->attribute, $this->options);
        } else {
            echo Html::input($this->type, $this->name, $this->value, $this->options);
        }
    }

    public function registerClientScript()
    {
        $view = $this->getView();
        $id = $this->options['id'];
        $js = "var phoneMaskSettings = {
            placeholder: '" . $this->options['placeholder'] . "',
            translation: {
                'Z': {
                    pattern: /[7-8]/,
                    optional: true
                }
            },
            onKeyPress: function (cep, e, field, options) {},
            onChange: function (cep) {},
            onComplete: function (a) {
                if (parseInt(a.charAt(0)) === 7) {
                    a = '8' + a.slice(1);
                } else if (a.charAt(0) === '+' && parseInt(a.charAt(0)) === 7) {
                    a = '8' + a.slice(2);
                }

                var aNew = a.replace(/[^0-9]/gim, '');
                var phoneFill = $('#" . $id . "').attr('data-phone_fill');
                if (aNew.slice(-4) !== phoneFill.slice(-4)) {
                    var lastDigit = phoneFill.slice(-1);

                    var temporaryA = aNew + lastDigit;

                    if (temporaryA.slice(-4) === phoneFill.slice(-4)) {
                        $('#phone').unmask();
                        if (parseInt(phoneFill.charAt(0)) === 7) {
                            phoneFill = '8' + phoneFill.slice(1);
                        } else if (phoneFill.charAt(0) === '+' && parseInt(phoneFill.charAt(0)) === 7) {
                            phoneFill = '8' + phoneFill.slice(2);
                        }
                        $('#" . $id . "').val(phoneFill);
                        $('#" . $id . "').mask('Z(000)000-00-00', phoneMaskSettings);

                        return false;
                    }
                }
                $('#" . $id . "').val(a);
            },
            onError: function (cep) {},
        };";
        $js .= "jQuery('#" . $id . "')
            .on('keyup', function () {
                $(this).attr('data-phone_fill', $(this).val().replace(/[^0-9]/gim, ''))
            })
            .on('keydown', function (e) {
                if (e.key === '+') {
                    return false
                }
            }).mask('Z(000)000-00-00', phoneMaskSettings);
        ";
        PhoneInputAsset::register($view);
        $view->registerJs($js);
    }
}
