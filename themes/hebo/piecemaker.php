﻿<?php
header('Content-Type: text/xml');

$xml ='<?xml version="1.0" encoding="utf-8"?>
<Piecemaker>
  <Contents>
   	<Image Source="'.$_GET['path'].'/img/slider/flickr/s11.jpg" Title="Editing made Easy"></Image>
	<Image Source="'.$_GET['path'].'/img/slider/flickr/s12n.jpg" Title="Editing made Easy"></Image>
	<Image Source="'.$_GET['path'].'/img/slider/flickr/s11.jpg" Title="Editing made Easy"></Image>
	<Image Source="'.$_GET['path'].'/img/slider/flickr/s10_2.jpg" Title="Editing made Easy"></Image>
	
  </Contents>
  <Settings ImageWidth="1200" ImageHeight="430" LoaderColor="0x333333" InnerSideColor="0x222222" SideShadowAlpha="0" DropShadowAlpha="0" DropShadowDistance="0" DropShadowScale="0" DropShadowBlurX="0" DropShadowBlurY="4" MenuDistanceX="20" MenuDistanceY="50" MenuColor1="0x999999" MenuColor2="0x333333" MenuColor3="0xFFFFFF" ControlSize="50" ControlDistance="20" ControlColor1="0x222222" ControlColor2="0xFFFFFF" ControlAlpha="0.8" ControlAlphaOver="0.95" ControlsX="500" ControlsY="215" ControlsAlign="center" TooltipHeight="30" TooltipColor="0x222222" TooltipTextY="5" TooltipTextStyle="P-Italic" TooltipTextColor="0xFFFFFF" TooltipMarginLeft="5" TooltipMarginRight="5" TooltipTextSharpness="50" TooltipTextThickness="-100" InfoWidth="400" InfoBackground="0xFFFFFF" InfoBackgroundAlpha="0.95" InfoMargin="15" InfoSharpness="0" InfoThickness="0" Autoplay="5" FieldOfView="45"></Settings>
  <Transitions>
    <Transition Pieces="9" Time="1.2" Transition="easeInOutBack" Delay="0.1" DepthOffset="300" CubeDistance="30"></Transition>
    <Transition Pieces="15" Time="3" Transition="easeInOutElastic" Delay="0.03" DepthOffset="200" CubeDistance="10"></Transition>
    <Transition Pieces="5" Time="1.3" Transition="easeInOutCubic" Delay="0.1" DepthOffset="500" CubeDistance="50"></Transition>
    <Transition Pieces="9" Time="1.25" Transition="easeInOutBack" Delay="0.1" DepthOffset="900" CubeDistance="5"></Transition>
  </Transitions>
</Piecemaker>';
echo $xml;
?>
