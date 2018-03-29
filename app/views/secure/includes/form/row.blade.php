<?php
$label = isset($label) ? $label : false;
$elementId = isset($elementId) ? $elementId : false;
$defaultValue = isset($defaultValue) ? $defaultValue : '';
$elementDivWidth = isset($elementDivWidth) ? $elementDivWidth : 10;
$elementTextType = isset($elementTextType) ? $elementTextType : 'text';
$labelDivWidth = 12 - $elementDivWidth;

$elementStyle = isset($elementStyle) ? $elementStyle : false;
$placeholder = isset($placeholderText) ? $placeholderText : false;
?>


<div class="form-group row">

    @if($label)
        <label for="{{$elementId}}" class="col-sm-{{$labelDivWidth}} col-form-label">{{$label}}</label>
    @endif

    <div class="col-sm-{{$elementDivWidth}}">
        @include('secure.includes.form.elements.text',[
            'label'=>$label,
            'elementId'=>$elementId,
            'defaultValue'=>'',
            'elementTextType'=>$elementTextType,
            'elementStyle'=>$elementStyle,
            'placeholderText'=>$placeholder
        ])

    </div>
</div>



