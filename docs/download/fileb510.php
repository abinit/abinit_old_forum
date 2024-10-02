%!PS-Adobe-3.0 EPSF-3.0
%%BoundingBox: 0 0 515 609
%%Creator: IgorPro
%%Title: Graph0_4
%%Creation Date: mer. 21 juil. 2010 15:25
%%DocumentFonts:  (atend) 
%%LanguageLevel: 2
%%EndComments
%%BeginProlog
%%EndProlog
%%BeginResource: procset IgorProcset 1.0 0
/IgorSave save def		% Level 2 procs

200 dict begin

0 setgray 0 setlinecap
1 setlinewidth 0 setlinejoin
1 setmiterlimit [] 0 setdash

/aw 0 def 	/ah 0 def
/x0 0 def	/y0 0 def	/x1 0 def	/y1 0 def
/rx0 0 def	/ry0 0 def	/rx1 0 def	/ry1 0 def
/tmp0 0 def /tmp1 0 def
/packedRed 0 def /packedGreen 0 def /packedBlue 0 def
/x 0 def	/y 0 def	/w 0 def	/c 0 string def

/rbak 1 def	/gbak 1 def	/bbak 1 def
/rfor 0 def	/gfor 0 def	/bfor 0 def

/bdef{bind def}bind def
/ldef{load def}bdef
/xdef{exch def}bdef

/useCMYK 0 def
/useRound false def


/Mysetrgbcolor{	% r g b
	useCMYK 1 eq
	{
		3 {1 exch sub 3 -1 roll} repeat			% c=1-r, m= 1-g, y= 1-b
		dup
		2 index 2 copy gt {exch} if pop
		3 index 2 copy gt {exch} if pop
%		2 div									% k= (min of c,m,y)/2
		4 1 roll
		3 {3 index sub 3 -1 roll} repeat		% sub k from c,m & y
		4 -1 roll
		setcmykcolor
	}
	{ setrgbcolor }
	ifelse
}bdef

%******** BEGIN NEW PAT STUFF ********** [

/l {lineto} bdef
/m {moveto} bdef
/PatCom{pop UseBack 0 0 8 8 rectfill UseFore}bdef

/SpecialPatProcs
<<
	/p0102040810204080 {PatCom 6.5 0 m 0 6.5 l 0 7.5 l 7.5 0 l 6.5 0 l 8 6.5 m 6.5 8 l 7.5 8 l 8 7.5 l 8 6.5 l fill}bind
	/p8040201008040201 {PatCom 0 0.5 m 7.5 8 l 8 8 l 8 7.5 l 0.5 0 l 0 0 l 0 0.5 l 0 7.5 m 0 8 l 0.5 8 l 0 7.5 l 7.5 0 m 8 0.5 l 8 0 l 7.5 0 l fill}bind
	/p03060C183060C081 {PatCom 5.5 0 m 0 5.5 l 0 7.5 l 7.5 0 l 5.5 0 l 8 5.5 m 5.5 8 l 7.5 8 l 8 7.5 l 8 5.5 l fill}bind
	/pC06030180C060381 {PatCom 0 0 m 0 1.5 l 6.5 8 l 8 8 l 8 7.5 l 0.5 0 l 0 0 l 0 7.5 m 0 8 l 0.5 8 l 0 7.5 l 6.5 0 m 8 1.5 l 8 0 l 6.5 0 l fill}bind
	/p83070E1C3870E0C1 {PatCom 5.5 0 m 0 5.5 l 0 8 l 0.5 8 l 8 0.5 l 8 0 l 5.5 0 l 0 0 m 0 0.5 l 0.5 0 l 0 0 l 8 5.5 m 5.5 8 l 8 8 l 8 5.5 l fill}bind
	/pC1E070381C0E0783 {PatCom 0 0 m 0 1.5 l 6.5 8 l 8 8 l 8 6.5 l 1.5 0 l 0 0 l 0 6.5 m 0 8 l 1.5 8 l 0 6.5 l 6.5 0 m 8 1.5 l 8 0 l 6.5 0 l fill}bind
	/p1122448811224488 {PatCom 2.5 0 m 0 2.5 l 0 3.5 l 3.5 0 l 2.5 0 l 6.5 0 m 0 6.5 l 0 7.5 l 7.5 0 l 6.5 0 l 8 2.5 m 2.5 8 l 3.5 8 l 8 3.5 l 8 2.5 l 8 6.5 m 6.5 8 l 7.5 8 l 8 7.5 l 8 6.5 l fill}bind
	/p8844221188442211 {PatCom 7.5 0 m 8 0.5 l 8 0 l 7.5 0 l 3.5 0 m 8 4.5 l 8 3.5 l 4.5 0 l 3.5 0 l 0 0 m 0 0.5 l 7.5 8 l 8 8 l 8 7.5 l 0.5 0 l 0 0 l 0 3.5 m 0 4.5 l 3.5 8 l 4.5 8 l 0 3.5 l 0 7.5 m 0 8 l 0.5 8 l 0 7.5 l fill}bind
	
	/p3366CC993366CC99 {PatCom 1.5 0 m 0 1.5 l 0 3.5 l 3.5 0 l 1.5 0 l 5.5 0 m 0 5.5 l 0 7.5 l 7.5 0 l 5.5 0 l 8 1.5 m 1.5 8 l 3.5 8 l 8 3.5 l 8 1.5 l 8 5.5 m 5.5 8 l 7.5 8 l 8 7.5 l 8 5.5 l fill}bind
	/pCC663399CC663399 {PatCom 6.5 0 m 8 1.5 l 8 0 l 6.5 0 l 2.5 0 m 8 5.5 l 8 3.5 l 4.5 0 l 2.5 0 l 0 0 m 0 1.5 l 6.5 8 l 8 8 l 8 7.5 l 0.5 0 l 0 0 l 0 3.5 m 0 5.5 l 2.5 8 l 4.5 8 l 0 3.5 l 0 7.5 m 0 8 l 0.5 8 l 0 7.5 l fill}bind
	/p77EEDDBB77EEDDBB {PatCom 0.5 0 m 0 0.5 l 0 3.5 l 3.5 0 l 0.5 0 l 4.5 0 m 0 4.5 l 0 7.5 l 7.5 0 l 4.5 0 l 8 0.5 m 0.5 8 l 3.5 8 l 8 3.5 l 8 0.5 l 8 4.5 m 4.5 8 l 7.5 8 l 8 7.5 l 8 4.5 l fill}bind
	/pEE77BBDDEE77BBDD {PatCom 0 0 m 0 2.5 l 5.5 8 l 8 8 l 8 7.5 l 0.5 0 l 0 0 l 1.5 0 m 8 6.5 l 8 3.5 l 4.5 0 l 1.5 0 l 5.5 0 m 8 2.5 l 8 0 l 5.5 0 l 0 3.5 m 0 6.5 l 1.5 8 l 4.5 8 l 0 3.5 l 0 7.5 m 0 8 l 0.5 8 l 0 7.5 l fill}bind
	/pE4C993274E9C3972 {PatCom 0 0 m 0 2.5 l 2.5 0 l 0 0 l 4.5 0 m 0 4.5 l 0 5.5 l 5.5 0 l 4.5 0 l 7.5 0 m 0 7.5 l 0 8 l 2.5 8 l 8 2.5 l 8 0 l 7.5 0 l 8 4.5 m 4.5 8 l 5.5 8 l 8 5.5 l 8 4.5 l 8 7.5 m 7.5 8 l 8 8 l 8 7.5 l fill}bind
	/p2793C9E472399C4E {PatCom 5.5 0 m 8 2.5 l 8 1.5 l 6.5 0 l 5.5 0 l 0.5 0 m 8 7.5 l 8 4.5 l 3.5 0 l 0.5 0 l 0 1.5 m 0 2.5 l 5.5 8 l 6.5 8 l 0 1.5 l 0 4.5 m 0 7.5 l 0.5 8 l 3.5 8 l 0 4.5 l fill}bind
>>
def

/Pat8Image2{			% patternstring -- 
	UseBack 0 0 8 8 rectfill
	UseFore
	0 exch									% y patstr
	{
		0 exch								% y x value
		128 8{								% y x value bitmask
			dup 2 index and 0 eq not{		% y x bitmask value boolval
				2 index 4 index 1 1 rectfill
			}if
			-1 bitshift 3 2 roll 
			1 add
			3 1 roll
		}repeat
		pop pop pop
		1 add
	}forall
	pop
}bdef

/PatstrToName{
	(p0000000000000000)	17 string copy	% apparantly literal strings are global objects
	exch 1 exch
	{
		16 (00) cvrs dup length 
		3 index 3 index 3 -1 roll 2 exch sub add
		3 -1 roll putinterval
		2 add
	}forall
	pop
	cvn
}bdef



/ThePatTemplate
<<
	/PatternType 1		% Tiling pattern
	/PaintType 1		% Colored
	/TilingType 1
	/BBox [0 0 8 8]
	/XStep 8
	/YStep 8
	/mypatstr <03060C183060C081>
	/PaintProc {begin mypatstr Pat8Image2 end}bind
>>
def



/FillPattern{	% patternstring --
	gsave
	ThePatTemplate /mypatstr 2 index put
	PatstrToName SpecialPatProcs 1 index known{
		SpecialPatProcs exch get
	}{
		{begin mypatstr Pat8Image2 end}bind
	}ifelse
	ThePatTemplate /PaintProc 3 -1 roll put
	ThePatTemplate matrix makepattern setpattern fill
	grestore
}bdef

%******** END NEW PAT STUFF ********** ]



/UseBack{ rbak gbak bbak Mysetrgbcolor }bdef
/UseFore{ rfor gfor bfor Mysetrgbcolor }bdef
/SetBack {/bbak xdef /gbak xdef /rbak xdef }bdef
/SetFore {/bfor xdef /gfor xdef /rfor xdef }bdef


/ps {setlinewidth} bdef	
/clw {currentlinewidth} bdef
/sd {0 setdash} bdef

/mstroke {0 clw eq {newpath}{stroke} ifelse} bdef

/_R{ .5 sub round .5 add}bdef
/allign{ useRound {transform _R exch _R exch itransform} if }bdef
/L {allign lineto} bdef
/M {allign moveto} bdef

/addto { dup load exec 3 -1 roll add store }bdef
/MacLine{		% xto yto xfrom yfrom MacLine --
	newpath		% only handles horizontal or vertical lines
	/y0 xdef /x0 xdef /y1 xdef /x1 xdef
	x1 x0 sub abs
	y1 y0 sub abs gt
	{clw x1 x0 gt {/x1}{/x0}ifelse  addto  clw 2 div dup /y0 addto /y1 addto}
	{clw y1 y0 gt {/y1}{/y0}ifelse  addto  clw 2 div dup /x0 addto /x1 addto}
	ifelse
	x0 y0 M
	x1 y1 L
	mstroke
}bdef

/FillPath{		% graylevel FillPath --   fills current path and leaves path alive
	gsave
	dup 1 exch sub		% glev 1-glev
	rbak 2 index mul	rfor 2 index mul add
	gbak 3 index mul	gfor 3 index mul add
	bbak 4 index mul	bfor 4 index mul add
	Mysetrgbcolor
	pop pop
	fill
	grestore
}bdef

/StrokePath{		% linejoin StrokePath --   strokes current path and leaves path alive
	gsave
	setlinejoin
	mstroke
	grestore
}bdef

/RectPath{		% x0 y0 x1 y1 RectPath -- sets current path to a rectange
	/y1 xdef /x1 xdef /y0 xdef /x0 xdef
	newpath
	x0 y0 M
	x1 y0 L
	x1 y1 L
	x0 y1 L
	closepath
}bdef

/PaintRect{		% x0 y0 x1 y1 graylevel PaintRect --
	gsave
	5 1 roll
	RectPath
	FillPath
	grestore
}bdef




% **** begin image stuff *****
% The following are used for images. This has to be kept
% in synch with corresponding code in ImageDisp.c.In particular
% the expansion factor, 8, has to be in synch. LH010606: now to
% fix colorscales in layouts, expansion factor is in variable.
% packedcolor is (red*256+green)*256+blue

/ExpFact 8 def	% default expansion factor

/SetPackedColor{	% packedcolor SetPackedColor --
	dup 256 mod /tmp0 xdef	% extract blue
	256 idiv
	dup 256 mod /tmp1 xdef	% extract green
	256 idiv 				% extract red
	255 div /packedRed xdef
	tmp1 255 div /packedGreen xdef
	tmp0 255 div /packedBlue xdef
}bdef

/IR_FillRect{
	gsave
	newpath
	rx0 ry0 M
	rx1 ry0 L
	rx1 ry1 L
	rx0 ry1 L
	closepath
	packedRed packedGreen packedBlue Mysetrgbcolor
	fill
	grestore
}bdef

/NewRectImageLine{	% x0 y0 x1 y1 packedcolor NewRectImageLine --
	SetPackedColor

	/ry1 xdef /rx1 xdef /ry0 xdef /rx0 xdef	% remember starting rectange for following calls
	
	IR_FillRect
}bdef

/rx{		% xdist rx --
	ExpFact div
	dup 0 lt
	{ rx0 /rx1 xdef rx1 add /rx0 xdef }		% neg delta steps left
	{ rx1 /rx0 xdef rx0 add /rx1 xdef }
	ifelse
	IR_FillRect
}bdef

/ry{		% ydist rr --
	ExpFact div
	dup 0 lt
	{ ry1 /ry0 xdef ry0 exch sub /ry1 xdef }		% neg delta steps down
	{ ry0 /ry1 xdef ry1 exch sub /ry0 xdef }
	ifelse
	IR_FillRect
}bdef


/cx{		% xdist packedcolor cx --
	SetPackedColor
	rx
}bdef

/cy{		% ydist packedcolor cx --
	SetPackedColor
	ry
}bdef

% **** end image stuff *****



/EraseRect{		% x0 y0 x1 y1 EraseRect --  fills rect with background color
	gsave
	RectPath
	UseBack fill
	grestore
}bdef

/FrameRect{		% x0 y0 x1 y1 FrameRect --
	RectPath
	mstroke
}bdef

/FrameMacRect{		% x0 y0 x1 y1 FrameMacRect --  Mac-like version
	RectPath
	mstroke
}bdef


/ellipse{
	/savematrix matrix currentmatrix def
	translate scale 0 0 1 0 360 arc
	savematrix setmatrix
}bdef



/OvalPath{		% x0 y0 x1 y1 OvalPath -- sets current path to an oval inside rectange
	/y1 xdef /x1 xdef /y0 xdef /x0 xdef
	newpath
	x0 x1 sub abs 2 div y0 y1 sub abs 2 div x0 x1 add 2 div y0 y1 add 2 div ellipse
	closepath
}bdef


/PaintOval{		% x0 y0 x1 y1 graylevel PaintOval --
	gsave
	5 1 roll
	OvalPath
	FillPath
	grestore
}bdef

/EraseOval{		% x0 y0 x1 y1 EraseOval --  fills with background color
	gsave
	OvalPath
	UseBack fill
	grestore
}bdef

/FrameOval{		% x0 y0 x1 y1 FrameOval --
	OvalPath
	mstroke
}bdef


/RRectPath{		% x0 y0 x1 y1 r OvalPath -- sets current path to rounded rectange, radius r
	/radius xdef
	/y1 xdef /x1 xdef /y0 xdef /x0 xdef
	newpath
	x0 radius add y0 M
	x1 y0 x1 y1 radius arcto 4{pop}repeat
	x1 y1 x0 y1 radius arcto 4{pop}repeat
	x0 y1 x0 y0 radius arcto 4{pop}repeat
	x0 y0 x1 y0 radius arcto 4{pop}repeat
	closepath
}bdef


/PaintRRect{		% x0 y0 x1 y1 r graylevel PaintRRect --
	gsave
	6 1 roll
	RRectPath
	FillPath
	grestore
}bdef

/EraseRRect{		% x0 y0 x1 y1 r EraseRRect --  fills rect with background color
	gsave
	RRectPath
	UseBack fill
	grestore
}bdef

/FrameRRect{		% x0 y0 x1 y1 r FrameRect --
	RRectPath
	mstroke
}bdef




/CapLine{		% x0 y0 x1 y1 linecap CapLine -- draws line using given line cap
	gsave
	setlinecap
	/y1 xdef /x1 xdef /y0 xdef /x0 xdef
	newpath
	x0 y0 M
	x1 y1 L
	mstroke
	grestore
}bdef

/Arrow{		% x0 y0 x1 y1 width height graylevel Arrow -- draws arrow at end of line from P0 to P1
	gsave
	/gl xdef 1 add /aw xdef 1 add /ah xdef /y0 xdef /x0 xdef /y1 xdef /x1 xdef 
	x0 y0 translate
	/x1 x1 x0 sub def
	/y1 y1 y0 sub def
	y1 x1 atan rotate
	newpath
	0 0 M
	aw ah 2 div L
	aw ah 2 div neg L
	closepath
	gl FillPath
%	10 setmiterlimit
%	1 ps
%	0 StrokePath
	grestore
}bdef


% ************ fonts ************


/normal 0 def
/bold 1 def
/italic 2 def
/underline 4 def
/outline 8 def
/shadow 16 def

/FACE1 bold italic or def
/FACE2 outline shadow or def

/Shadow {
	gsave
	siz 0.08 mul 1 index mul x add
	exch siz 0.07 mul mul y add M
	c show
	grestore
} def

/Outline {
	gsave
	siz .02 mul setlinewidth
	x y M c true charpath
	gsave UseBack fill grestore stroke
	grestore
} def

/Underline{
	gsave
	siz 0.08 mul ps
	x y clw add M x c stringwidth pop add y clw add L stroke
	grestore
}bdef

/DoShow{	% assumes x,y,c are already set
	fontkind FACE2 and
	dup normal eq 				{c x y M show} if
	dup outline eq 				{Outline} if
	dup shadow eq 				{1 Shadow Outline} if
	outline shadow or eq 		{1 Shadow 1.5 Shadow Outline} if
	fontkind underline and 0 ne { Underline } if
}bdef

/DoWShow{	% assumes x,y,c & w are already set
	gsave
	x y translate
	/x 0 def  /y 0 def
	w c stringwidth pop div 1 scale
	DoShow
	grestore
}bdef

/S{
	/y xdef /x xdef /c xdef
	DoShow
}bdef

/WS{		% string x y desiredwidth WS -
	/w xdef /y xdef /x xdef /c xdef
	DoWShow
}bdef

/F{
	/fontkind xdef
	findfont exch /siz xdef [siz 0 0 siz neg  0 0] makefont setfont
}bdef



/Re-encode {
	dup length array copy
	/eap 0 def
	exch {
		dup type /integertype eq
		{ /eap xdef }
		{
			1 index
			exch
			eap exch
			put
			/eap eap 1 add def
		}
		ifelse
	} forall
} bind def

[ 39/quotesingle 96/grave 128/.notdef/.notdef/quotesinglbase
/florin/quotedblbase/ellipsis/dagger/daggerdbl/circumflex
/perthousand/Scaron/guilsinglleft/OE/.notdef/.notdef
/.notdef/.notdef/quoteleft/quoteright/quotedblleft/quotedblright
/bullet/endash/emdash/tilde/trademark/scaron/guilsinglright
/oe/.notdef/.notdef/Ydieresis/.notdef/exclamdown/cent
/sterling/currency/yen/brokenbar/section/dieresis/copyright
/ordfeminine/guillemotleft/logicalnot/.notdef/registered
/macron/degree/plusminus/twosuperior/threesuperior/acute
/mu/paragraph/periodcentered/cedilla/onesuperior/ordmasculine
/guillemotright/onequarter/onehalf/threequarters/questiondown
/Agrave/Aacute/Acircumflex/Atilde/Adieresis/Aring/AE
/Ccedilla/Egrave/Eacute/Ecircumflex/Edieresis/Igrave
/Iacute/Icircumflex/Idieresis/Eth/Ntilde/Ograve/Oacute
/Ocircumflex/Otilde/Odieresis/multiply/Oslash/Ugrave
/Uacute/Ucircumflex/Udieresis/Yacute/Thorn/germandbls
/agrave/aacute/acircumflex/atilde/adieresis/aring/ae
/ccedilla/egrave/eacute/ecircumflex/edieresis/igrave
/iacute/icircumflex/idieresis/eth/ntilde/ograve/oacute
/ocircumflex/otilde/odieresis/divide/oslash/ugrave/uacute
/ucircumflex/udieresis/yacute/thorn/ydieresis]
/zzz xdef

/OurEncoding{ zzz StandardEncoding Re-encode }bdef

/EncodeFont	{
	findfont
	dup length dict begin
	{
		1 index /FID ne
		{ def }
		{ pop pop }
		ifelse
	} forall
	/FontName xdef
	/Encoding xdef
	FontName currentdict
	end
	definefont pop
} bind def

%%EndResource
%%BeginFont: /OF0
11 dict begin
/FontName /OF0 def
% TT Name: Tahoma
/FontType 3 def
/FontMatrix [0.001 0 0 -0.001 0 0] def
/FontBBox [0 -760 778 206] def
/Encoding 256 array def 0 1 255{Encoding exch/.notdef put}for
Encoding 32 /s32 put
Encoding 40 /s40 put
Encoding 41 /s41 put
Encoding 45 /s45 put
Encoding 48 /s48 put
Encoding 49 /s49 put
Encoding 50 /s50 put
Encoding 52 /s52 put
Encoding 54 /s54 put
Encoding 70 /s70 put
Encoding 77 /s77 put
Encoding 88 /s88 put
Encoding 99 /s99 put
Encoding 101 /s101 put
Encoding 103 /s103 put
Encoding 109 /s109 put
Encoding 110 /s110 put
Encoding 113 /s113 put
Encoding 114 /s114 put
Encoding 117 /s117 put
Encoding 121 /s121 put
/BoundingBoxes 21 dict def
BoundingBoxes begin
/s32 [0 0 0 0] def
/s40 [53 -760 347 201] def
/s41 [36 -760 330 201] def
/s45 [44 -362 319 -275] def
/s48 [41 -742 506 15] def
/s49 [110 -730 465 -0] def
/s50 [53 -742 501 -0] def
/s52 [20 -727 521 -0] def
/s54 [42 -741 514 15] def
/s70 [74 -727 508 -0] def
/s77 [74 -727 697 -0] def
/s88 [4 -727 577 -0] def
/s99 [28 -558 444 12] def
/s101 [28 -560 500 12] def
/s103 [28 -560 487 206] def
/s109 [66 -560 778 -0] def
/s110 [66 -560 495 -0] def
/s113 [28 -560 487 201] def
/s114 [66 -545 355 -0] def
/s117 [63 -545 492 15] def
/s121 [3 -545 495 201] def
end
/Metrics 21 dict def
 Metrics begin
/s32 313 def
/s40 383 def
/s41 383 def
/s45 363 def
/s48 546 def
/s49 546 def
/s50 546 def
/s52 546 def
/s54 546 def
/s70 521 def
/s77 771 def
/s88 581 def
/s99 461 def
/s101 526 def
/s103 553 def
/s109 840 def
/s110 558 def
/s113 553 def
/s114 360 def
/s117 558 def
/s121 498 def
end
/CharProcs 21 dict def
 CharProcs begin
/.notdef {} def
/s40 {
347 201 moveto
235 201 347 201 235 201 curveto
179 134 134 62 102 -13 curveto
69 -88 53 -177 53 -280 curveto
53 -380 69 -468 101 -544 curveto
133 -621 178 -693 235 -760 curveto
347 -760 235 -760 347 -760 curveto
347 -755 347 -760 347 -755 curveto
321 -731 296 -704 272 -673 curveto
248 -642 226 -606 206 -564 curveto
186 -524 170 -480 158 -432 curveto
146 -384 140 -333 140 -280 curveto
140 -224 146 -173 158 -127 curveto
170 -80 186 -36 206 5 curveto
225 45 247 81 272 114 curveto
297 146 322 174 347 196 curveto
347 201 347 196 347 201 curveto
closepath
} bind def
/s41 {
330 -280 moveto
330 -179 314 -91 282 -14 curveto
249 62 205 134 148 201 curveto
36 201 148 201 36 201 curveto
36 196 36 201 36 196 curveto
61 174 86 146 111 113 curveto
137 81 159 45 177 5 curveto
197 -37 213 -81 225 -128 curveto
237 -175 243 -225 243 -280 curveto
243 -333 237 -384 225 -432 curveto
213 -480 197 -524 177 -564 curveto
158 -605 135 -641 110 -673 curveto
85 -705 61 -733 36 -755 curveto
36 -760 36 -755 36 -760 curveto
148 -760 36 -760 148 -760 curveto
204 -693 249 -621 281 -545 curveto
314 -469 330 -381 330 -280 curveto
closepath
} bind def
/s45 {
319 -275 moveto
44 -275 319 -275 44 -275 curveto
44 -362 44 -275 44 -362 curveto
319 -362 44 -362 319 -362 curveto
319 -275 319 -362 319 -275 curveto
closepath
} bind def
/s48 {
506 -364 moveto
506 -233 487 -138 449 -77 curveto
411 -16 353 15 274 15 curveto
193 15 135 -16 97 -78 curveto
60 -140 41 -235 41 -363 curveto
41 -494 60 -590 98 -651 curveto
136 -712 194 -742 274 -742 curveto
354 -742 412 -711 450 -648 curveto
487 -585 506 -490 506 -364 curveto
closepath
381 -143 moveto
391 -167 397 -197 401 -234 curveto
405 -271 407 -314 407 -364 curveto
407 -414 405 -457 401 -494 curveto
397 -530 390 -561 381 -585 curveto
371 -610 357 -629 340 -642 curveto
323 -655 301 -661 274 -661 curveto
246 -661 224 -655 207 -642 curveto
189 -629 176 -610 165 -584 curveto
156 -560 149 -529 145 -491 curveto
142 -453 140 -410 140 -363 curveto
140 -312 142 -270 145 -236 curveto
148 -202 155 -171 165 -144 curveto
174 -119 188 -100 205 -86 curveto
223 -73 245 -66 274 -66 curveto
301 -66 323 -72 340 -85 curveto
358 -98 371 -117 381 -143 curveto
closepath
} bind def
/s49 {
465 -0 moveto
110 -0 465 -0 110 -0 curveto
110 -74 110 -0 110 -74 curveto
242 -74 110 -74 242 -74 curveto
242 -562 242 -74 242 -562 curveto
110 -562 242 -562 110 -562 curveto
110 -628 110 -562 110 -628 curveto
160 -628 197 -635 220 -649 curveto
244 -664 257 -690 260 -730 curveto
336 -730 260 -730 336 -730 curveto
336 -74 336 -730 336 -74 curveto
465 -74 336 -74 465 -74 curveto
465 -0 465 -74 465 -0 curveto
closepath
} bind def
/s50 {
501 -0 moveto
53 -0 501 -0 53 -0 curveto
53 -103 53 -0 53 -103 curveto
85 -133 116 -162 144 -190 curveto
173 -218 201 -248 228 -278 curveto
284 -339 322 -387 342 -424 curveto
362 -461 372 -498 372 -537 curveto
372 -558 369 -575 362 -591 curveto
356 -606 347 -619 336 -629 curveto
325 -638 312 -646 297 -651 curveto
282 -656 265 -658 247 -658 curveto
230 -658 213 -656 195 -651 curveto
177 -647 160 -642 144 -635 curveto
130 -630 117 -623 104 -615 curveto
91 -607 81 -601 73 -595 curveto
68 -595 73 -595 68 -595 curveto
68 -698 68 -595 68 -698 curveto
88 -708 116 -718 152 -728 curveto
188 -737 222 -742 254 -742 curveto
322 -742 375 -724 413 -688 curveto
452 -652 471 -603 471 -542 curveto
471 -514 468 -488 461 -463 curveto
454 -439 445 -417 433 -397 curveto
421 -376 407 -355 390 -334 curveto
373 -313 355 -292 336 -272 curveto
306 -239 272 -205 234 -169 curveto
197 -133 167 -105 144 -84 curveto
501 -84 144 -84 501 -84 curveto
501 -0 501 -84 501 -0 curveto
closepath
} bind def
/s52 {
521 -250 moveto
435 -250 521 -250 435 -250 curveto
435 -0 435 -250 435 -0 curveto
341 -0 435 -0 341 -0 curveto
341 -250 341 -0 341 -250 curveto
20 -250 341 -250 20 -250 curveto
20 -352 20 -250 20 -352 curveto
345 -727 20 -352 345 -727 curveto
435 -727 345 -727 435 -727 curveto
435 -328 435 -727 435 -328 curveto
521 -328 435 -328 521 -328 curveto
521 -250 521 -328 521 -250 curveto
closepath
341 -328 moveto
341 -612 341 -328 341 -612 curveto
96 -328 341 -612 96 -328 curveto
341 -328 96 -328 341 -328 curveto
closepath
} bind def
/s54 {
514 -236 moveto
514 -199 508 -164 495 -133 curveto
483 -101 466 -75 446 -53 curveto
424 -31 399 -14 372 -2 curveto
345 9 315 15 283 15 curveto
250 15 220 9 193 -2 curveto
166 -13 143 -29 122 -51 curveto
97 -77 77 -113 63 -157 curveto
49 -201 42 -255 42 -320 curveto
42 -383 49 -440 62 -491 curveto
75 -542 95 -586 122 -624 curveto
148 -661 182 -689 224 -710 curveto
265 -731 314 -741 368 -741 curveto
385 -741 400 -740 414 -739 curveto
428 -737 440 -734 451 -731 curveto
451 -637 451 -731 451 -637 curveto
447 -637 451 -637 447 -637 curveto
438 -642 425 -647 409 -651 curveto
392 -655 374 -657 355 -657 curveto
295 -657 246 -637 209 -596 curveto
172 -555 150 -494 143 -414 curveto
166 -430 190 -443 214 -452 curveto
239 -461 265 -465 294 -465 curveto
322 -465 347 -462 368 -456 curveto
390 -451 412 -439 435 -422 curveto
462 -402 482 -376 494 -345 curveto
508 -314 514 -278 514 -236 curveto
closepath
415 -233 moveto
415 -262 411 -287 403 -307 curveto
395 -327 383 -345 365 -359 curveto
353 -369 338 -376 322 -379 curveto
306 -382 290 -384 273 -384 curveto
250 -384 228 -381 206 -374 curveto
185 -367 164 -357 143 -344 curveto
142 -337 142 -330 141 -324 curveto
141 -317 141 -309 141 -299 curveto
141 -248 146 -208 156 -177 curveto
166 -146 178 -123 193 -107 curveto
207 -92 221 -81 236 -75 curveto
251 -69 267 -66 284 -66 curveto
323 -66 354 -80 379 -108 curveto
403 -136 415 -177 415 -233 curveto
closepath
} bind def
/s70 {
508 -641 moveto
171 -641 508 -641 171 -641 curveto
171 -436 171 -641 171 -436 curveto
494 -436 171 -436 494 -436 curveto
494 -350 494 -436 494 -350 curveto
171 -350 494 -350 171 -350 curveto
171 -0 171 -350 171 -0 curveto
74 -0 171 -0 74 -0 curveto
74 -727 74 -0 74 -727 curveto
508 -727 74 -727 508 -727 curveto
508 -641 508 -727 508 -641 curveto
closepath
} bind def
/s77 {
697 -0 moveto
600 -0 697 -0 600 -0 curveto
600 -626 600 -0 600 -626 curveto
411 -200 600 -626 411 -200 curveto
352 -200 411 -200 352 -200 curveto
164 -626 352 -200 164 -626 curveto
164 -0 164 -626 164 -0 curveto
74 -0 164 -0 74 -0 curveto
74 -727 74 -0 74 -727 curveto
206 -727 74 -727 206 -727 curveto
387 -322 206 -727 387 -322 curveto
562 -727 387 -322 562 -727 curveto
697 -727 562 -727 697 -727 curveto
697 -0 697 -727 697 -0 curveto
closepath
} bind def
/s88 {
577 -0 moveto
466 -0 577 -0 466 -0 curveto
289 -289 466 -0 289 -289 curveto
109 -0 289 -289 109 -0 curveto
4 -0 109 -0 4 -0 curveto
236 -364 4 -0 236 -364 curveto
11 -727 236 -364 11 -727 curveto
122 -727 11 -727 122 -727 curveto
295 -443 122 -727 295 -443 curveto
472 -727 295 -443 472 -727 curveto
577 -727 472 -727 577 -727 curveto
348 -369 577 -727 348 -369 curveto
577 -0 348 -369 577 -0 curveto
closepath
} bind def
/s99 {
283 12 moveto
245 12 211 6 180 -5 curveto
148 -17 121 -34 99 -58 curveto
76 -81 59 -111 47 -146 curveto
34 -182 28 -224 28 -272 curveto
28 -320 34 -361 47 -396 curveto
60 -431 77 -460 99 -484 curveto
120 -508 147 -526 179 -539 curveto
211 -552 246 -558 283 -558 curveto
313 -558 342 -554 369 -545 curveto
397 -537 422 -527 444 -516 curveto
444 -413 444 -516 444 -413 curveto
439 -413 444 -413 439 -413 curveto
432 -418 424 -425 413 -432 curveto
403 -439 391 -446 376 -454 curveto
363 -460 348 -466 331 -471 curveto
314 -476 297 -478 281 -478 curveto
233 -478 195 -460 166 -424 curveto
137 -388 123 -338 123 -272 curveto
123 -208 137 -158 165 -122 curveto
193 -86 231 -68 281 -68 curveto
311 -68 340 -74 367 -86 curveto
394 -99 418 -115 439 -134 curveto
444 -134 439 -134 444 -134 curveto
444 -31 444 -134 444 -31 curveto
435 -27 423 -22 410 -16 curveto
396 -10 384 -5 373 -2 curveto
357 2 343 6 331 8 curveto
318 11 302 12 283 12 curveto
closepath
} bind def
/s101 {
303 12 moveto
216 12 148 -12 100 -61 curveto
52 -110 28 -180 28 -270 curveto
28 -358 51 -429 98 -481 curveto
145 -534 206 -560 281 -560 curveto
315 -560 345 -555 371 -545 curveto
397 -536 420 -520 439 -500 curveto
459 -479 474 -453 484 -423 curveto
495 -393 500 -356 500 -313 curveto
500 -263 500 -313 500 -263 curveto
121 -263 500 -263 121 -263 curveto
121 -200 137 -151 169 -118 curveto
201 -85 245 -68 302 -68 curveto
322 -68 342 -70 361 -75 curveto
381 -79 398 -85 414 -92 curveto
431 -100 445 -107 456 -114 curveto
468 -121 477 -128 485 -134 curveto
490 -134 485 -134 490 -134 curveto
490 -34 490 -134 490 -34 curveto
479 -30 466 -24 450 -18 curveto
434 -12 420 -7 407 -3 curveto
389 2 373 5 358 8 curveto
344 11 325 12 303 12 curveto
closepath
411 -333 moveto
410 -358 407 -379 402 -397 curveto
397 -415 389 -430 380 -442 curveto
369 -456 355 -466 338 -473 curveto
321 -480 300 -484 276 -484 curveto
251 -484 230 -480 213 -473 curveto
196 -466 180 -455 166 -441 curveto
152 -427 142 -411 135 -394 curveto
128 -376 123 -356 121 -333 curveto
411 -333 121 -333 411 -333 curveto
closepath
} bind def
/s103 {
395 -148 moveto
395 -447 395 -148 395 -447 curveto
372 -458 351 -465 332 -470 curveto
312 -475 293 -477 273 -477 curveto
227 -477 190 -460 163 -426 curveto
136 -392 123 -343 123 -279 curveto
123 -219 133 -173 154 -141 curveto
174 -110 207 -94 253 -94 curveto
277 -94 301 -99 327 -108 curveto
352 -118 375 -131 395 -148 curveto
closepath
85 87 moveto
91 90 100 93 112 97 curveto
124 101 138 105 154 109 curveto
171 113 186 117 201 119 curveto
215 122 231 123 248 123 curveto
276 123 300 119 320 112 curveto
340 104 355 94 367 81 curveto
377 68 384 52 389 35 curveto
393 18 395 -2 395 -25 curveto
395 -72 395 -25 395 -72 curveto
370 -51 346 -35 322 -24 curveto
298 -14 268 -9 232 -9 curveto
170 -9 120 -32 83 -78 curveto
46 -125 28 -191 28 -277 curveto
28 -323 34 -363 47 -398 curveto
60 -433 77 -462 99 -487 curveto
119 -510 143 -528 172 -541 curveto
200 -554 229 -560 259 -560 curveto
287 -560 312 -557 333 -550 curveto
353 -543 374 -534 395 -521 curveto
400 -545 395 -521 400 -545 curveto
487 -545 400 -545 487 -545 curveto
487 -62 487 -545 487 -62 curveto
487 30 467 98 426 141 curveto
386 184 324 206 240 206 curveto
214 206 186 204 158 200 curveto
130 195 104 190 80 183 curveto
80 87 80 183 80 87 curveto
85 87 80 87 85 87 curveto
closepath
} bind def
/s109 {
686 -0 moveto
686 -315 686 -0 686 -315 curveto
686 -340 685 -364 683 -385 curveto
681 -406 677 -423 671 -435 curveto
664 -448 655 -458 643 -464 curveto
631 -470 615 -473 594 -473 curveto
575 -473 555 -467 533 -456 curveto
512 -444 489 -427 466 -405 curveto
466 -400 467 -393 467 -385 curveto
468 -378 468 -369 468 -358 curveto
468 -0 468 -358 468 -0 curveto
376 -0 468 -0 376 -0 curveto
376 -315 376 -0 376 -315 curveto
376 -340 375 -364 373 -385 curveto
371 -406 367 -423 361 -435 curveto
354 -448 345 -458 333 -464 curveto
321 -470 305 -473 284 -473 curveto
264 -473 243 -467 222 -454 curveto
200 -442 179 -426 158 -407 curveto
158 -0 158 -407 158 -0 curveto
66 -0 158 -0 66 -0 curveto
66 -545 66 -0 66 -545 curveto
158 -545 66 -545 158 -545 curveto
158 -484 158 -545 158 -484 curveto
182 -508 206 -527 230 -540 curveto
253 -553 279 -560 308 -560 curveto
340 -560 368 -553 393 -538 curveto
418 -523 437 -499 450 -466 curveto
478 -497 505 -520 532 -536 curveto
558 -552 587 -560 618 -560 curveto
641 -560 662 -556 682 -549 curveto
701 -542 718 -530 732 -514 curveto
747 -497 758 -476 766 -452 curveto
774 -427 778 -396 778 -359 curveto
778 -0 778 -359 778 -0 curveto
686 -0 778 -0 686 -0 curveto
closepath
} bind def
/s110 {
495 -0 moveto
403 -0 495 -0 403 -0 curveto
403 -310 403 -0 403 -310 curveto
403 -336 402 -359 399 -380 curveto
397 -402 392 -419 385 -432 curveto
378 -446 368 -456 354 -463 curveto
341 -470 323 -473 300 -473 curveto
277 -473 253 -467 229 -455 curveto
205 -442 181 -427 158 -407 curveto
158 -0 158 -407 158 -0 curveto
66 -0 158 -0 66 -0 curveto
66 -545 66 -0 66 -545 curveto
158 -545 66 -545 158 -545 curveto
158 -484 158 -545 158 -484 curveto
185 -509 212 -527 239 -540 curveto
266 -553 294 -560 324 -560 curveto
377 -560 419 -542 450 -507 curveto
480 -472 495 -421 495 -354 curveto
495 -0 495 -354 495 -0 curveto
closepath
} bind def
/s113 {
487 201 moveto
395 201 487 201 395 201 curveto
395 -60 395 201 395 -60 curveto
368 -35 342 -17 317 -6 curveto
291 5 263 11 232 11 curveto
170 11 120 -14 83 -63 curveto
46 -113 28 -182 28 -271 curveto
28 -317 34 -359 47 -395 curveto
60 -431 77 -461 99 -485 curveto
119 -509 143 -527 171 -540 curveto
199 -553 228 -560 259 -560 curveto
287 -560 311 -557 332 -550 curveto
352 -544 373 -534 395 -521 curveto
401 -545 395 -521 401 -545 curveto
487 -545 401 -545 487 -545 curveto
487 201 487 -545 487 201 curveto
closepath
395 -136 moveto
395 -446 395 -136 395 -446 curveto
372 -458 351 -466 333 -470 curveto
314 -475 295 -477 274 -477 curveto
226 -477 188 -460 162 -425 curveto
136 -390 123 -340 123 -275 curveto
123 -211 133 -162 154 -127 curveto
175 -93 208 -76 252 -76 curveto
278 -76 303 -82 327 -93 curveto
352 -104 374 -118 395 -136 curveto
closepath
} bind def
/s114 {
355 -446 moveto
350 -446 355 -446 350 -446 curveto
343 -448 336 -449 328 -449 curveto
321 -450 312 -450 301 -450 curveto
276 -450 252 -445 227 -434 curveto
203 -423 180 -407 158 -386 curveto
158 -0 158 -386 158 -0 curveto
66 -0 158 -0 66 -0 curveto
66 -545 66 -0 66 -545 curveto
158 -545 66 -545 158 -545 curveto
158 -464 158 -545 158 -464 curveto
191 -494 221 -515 246 -527 curveto
270 -539 295 -545 318 -545 curveto
327 -545 334 -545 339 -544 curveto
344 -544 349 -543 355 -542 curveto
355 -446 355 -542 355 -446 curveto
closepath
} bind def
/s117 {
492 -0 moveto
400 -0 492 -0 400 -0 curveto
400 -61 400 -0 400 -61 curveto
372 -36 345 -17 319 -4 curveto
294 9 266 15 234 15 curveto
211 15 188 11 167 3 curveto
146 -5 128 -17 112 -34 curveto
97 -51 85 -72 76 -98 curveto
67 -123 63 -155 63 -191 curveto
63 -545 63 -191 63 -545 curveto
155 -545 63 -545 155 -545 curveto
155 -235 155 -545 155 -235 curveto
155 -206 156 -182 158 -163 curveto
160 -144 165 -127 173 -113 curveto
180 -99 190 -88 203 -82 curveto
216 -75 234 -72 258 -72 curveto
281 -72 305 -78 330 -91 curveto
356 -104 379 -120 400 -138 curveto
400 -545 400 -138 400 -545 curveto
492 -545 400 -545 492 -545 curveto
492 -0 492 -545 492 -0 curveto
closepath
} bind def
/s121 {
495 -545 moveto
202 201 495 -545 202 201 curveto
103 201 202 201 103 201 curveto
201 -26 103 201 201 -26 curveto
3 -545 201 -26 3 -545 curveto
102 -545 3 -545 102 -545 curveto
251 -141 102 -545 251 -141 curveto
399 -545 251 -141 399 -545 curveto
495 -545 399 -545 495 -545 curveto
closepath
} bind def
end
/BuildGlyph { exch begin dup Metrics exch get 0 2 index BoundingBoxes exch get aload pop setcachedevice CharProcs exch 2 copy known not{pop/.notdef}if get exec fill end } def
/BuildChar { 1 index /Encoding get exch get 1 index /BuildGlyph get exec } bind def
currentdict end /OF0 exch definefont pop
%%EndFont
0 609 translate  1 -1 scale
/AnObj save def
1 1 1 SetBack   0 0 0 SetFore  UseFore
0 0 translate
1.00 ps
gsave 1.00 ps 82.62 16.88 82.62 555.38 0 CapLine grestore
1.00 ps
gsave 1.00 ps 72.38 96.62 83.12 96.62 0 CapLine grestore
14.00 (OF0) 0 F
(600) 44.62 102.12 22.88 WS
1.00 ps
gsave 1.00 ps 72.38 226.38 83.12 226.38 0 CapLine grestore
14.00 (OF0) 0 F
(400) 44.62 231.88 22.88 WS
1.00 ps
gsave 1.00 ps 72.38 356.12 83.12 356.12 0 CapLine grestore
14.00 (OF0) 0 F
(200) 44.62 361.62 22.88 WS
1.00 ps
gsave 1.00 ps 72.38 485.75 83.12 485.75 0 CapLine grestore
14.00 (OF0) 0 F
(0) 59.88 491.25 7.62 WS
gsave 1.00 ps 83.12 485.75 478.00 485.75 2 CapLine grestore
16.00 (OF0) 0 F
gsave 29.25 343.38 translate -90 rotate
(Frequency \(cm) 0.00 0.00 104.88 WS
grestore
11.25 (OF0) 0 F
gsave 18.50 238.50 translate -90 rotate
(-1) 0.00 0.00 10.25 WS
grestore
14.00 (OF0) 0 F
gsave 29.25 228.25 translate -90 rotate
(\)) 0.00 0.00 5.38 WS
grestore
1.00 ps
gsave 1.00 ps 82.12 555.88 478.50 555.88 0 CapLine grestore
1.00 ps
gsave 1.00 ps 82.62 566.12 82.62 555.38 0 CapLine grestore
14.00 (Symbol) 0 F
(G) 78.38 585.62 8.50 WS
gsave 0.25 ps  214.62 555.38 214.62 16.88 0 CapLine grestore
1.00 ps
gsave 1.00 ps 214.62 566.12 214.62 555.38 0 CapLine grestore
14.00 (OF0) 0 F
(M) 209.25 585.50 10.75 WS
gsave 0.25 ps  346.50 555.38 346.50 16.88 0 CapLine grestore
1.00 ps
gsave 1.00 ps 346.50 566.12 346.50 555.38 0 CapLine grestore
14.00 (OF0) 0 F
(X) 342.50 585.50 8.12 WS
gsave 0.25 ps  478.50 555.38 478.50 16.88 0 CapLine grestore
1.00 ps
gsave 1.00 ps 478.50 566.12 478.50 555.38 0 CapLine grestore
14.00 (Symbol) 0 F
(G) 474.25 585.62 8.50 WS
1 0.250019 0.250019 SetFore  UseFore
1.50 ps
newpath 82.62 487.25 M
95.88 495.75 L
109.00 502.00 L
122.25 499.62 L
135.38 466.50 L
148.62 448.00 L
161.75 433.62 L
175.00 422.25 L
188.25 412.88 L
201.38 403.50 L
214.62 393.25 L
227.75 397.25 L
241.00 398.88 L
254.12 397.50 L
267.38 393.62 L
280.62 387.88 L
293.75 381.25 L
307.00 374.62 L
320.12 369.25 L
333.38 366.62 L
346.50 367.50 L
359.75 377.75 L
372.88 388.50 L
386.12 399.62 L
399.38 411.25 L
412.50 423.12 L
425.75 435.12 L
438.88 447.50 L
452.12 459.88 L
465.25 472.25 L
478.50 487.25 L
478.50 487.25 L
mstroke
[] sd
0 0 0 SetFore  UseFore
3.0518e-05 0.6 1.5259e-05 SetFore  UseFore
1.50 ps
newpath 82.62 487.12 M
95.88 467.12 L
109.00 449.38 L
122.25 431.50 L
135.38 413.62 L
148.62 395.75 L
161.75 378.25 L
175.00 372.38 L
188.25 382.50 L
201.38 389.75 L
214.62 393.25 L
227.75 397.25 L
241.00 398.88 L
254.12 397.50 L
267.38 393.62 L
280.62 387.88 L
293.75 381.25 L
307.00 374.62 L
320.12 369.25 L
333.38 366.62 L
346.50 367.50 L
359.75 369.75 L
372.88 377.62 L
386.12 387.50 L
399.38 399.00 L
412.50 411.75 L
425.75 425.50 L
438.88 439.88 L
452.12 454.88 L
465.25 470.25 L
478.50 487.12 L
478.50 487.12 L
mstroke
[] sd
0 0 0 SetFore  UseFore
0 0 1 SetFore  UseFore
1.50 ps
newpath 82.62 481.00 M
95.88 449.25 L
109.00 415.25 L
122.25 386.00 L
135.38 365.25 L
148.62 358.00 L
161.75 362.50 L
175.00 365.88 L
188.25 377.25 L
201.38 388.62 L
214.62 392.25 L
227.75 386.00 L
241.00 377.62 L
254.12 368.38 L
267.38 358.75 L
280.62 350.12 L
293.75 355.75 L
307.00 360.62 L
320.12 364.38 L
333.38 365.50 L
346.50 364.25 L
359.75 361.88 L
372.88 363.25 L
386.12 369.12 L
399.38 379.75 L
412.50 393.88 L
425.75 410.25 L
438.88 428.12 L
452.12 446.88 L
465.25 466.25 L
478.50 481.00 L
478.50 481.00 L
mstroke
[] sd
0 0 0 SetFore  UseFore
0.6 1.5259e-05 0.480003 SetFore  UseFore
1.50 ps
newpath 82.62 341.50 M
95.88 342.38 L
109.00 344.62 L
122.25 347.38 L
135.38 350.25 L
148.62 353.38 L
161.75 358.12 L
175.00 361.38 L
188.25 366.62 L
201.38 380.50 L
214.62 392.25 L
227.75 386.00 L
241.00 377.62 L
254.12 368.38 L
267.38 358.75 L
280.62 350.00 L
293.75 355.75 L
307.00 360.50 L
320.12 364.25 L
333.38 365.50 L
346.50 364.25 L
359.75 357.75 L
372.88 348.62 L
386.12 340.25 L
399.38 332.50 L
412.50 334.38 L
425.75 336.62 L
438.88 338.12 L
452.12 339.88 L
465.25 341.00 L
478.50 341.50 L
478.50 341.50 L
mstroke
[] sd
0 0 0 SetFore  UseFore
0.733333 0.733333 0.733333 SetFore  UseFore
1.50 ps
newpath 82.62 341.50 M
95.88 338.00 L
109.00 332.88 L
122.25 326.75 L
135.38 319.25 L
148.62 318.88 L
161.75 332.50 L
175.00 350.38 L
188.25 345.75 L
201.38 332.62 L
214.62 326.38 L
227.75 328.00 L
241.00 332.25 L
254.12 337.88 L
267.38 344.00 L
280.62 349.38 L
293.75 340.38 L
307.00 332.00 L
320.12 324.38 L
333.38 318.25 L
346.50 315.50 L
359.75 319.38 L
372.88 323.12 L
386.12 326.50 L
399.38 331.12 L
412.50 332.75 L
425.75 335.50 L
438.88 337.88 L
452.12 339.25 L
465.25 339.88 L
478.50 341.50 L
478.50 341.50 L
mstroke
[] sd
0 0 0 SetFore  UseFore
1 0.500008 0.500008 SetFore  UseFore
1.50 ps
newpath 82.62 308.88 M
95.88 309.12 L
109.00 310.75 L
122.25 313.25 L
135.38 316.00 L
148.62 315.88 L
161.75 321.38 L
175.00 323.38 L
188.25 324.88 L
201.38 325.75 L
214.62 326.12 L
227.75 327.88 L
241.00 332.12 L
254.12 337.75 L
267.38 344.00 L
280.62 349.38 L
293.75 340.38 L
307.00 332.00 L
320.12 324.38 L
333.38 318.25 L
346.50 315.50 L
359.75 312.00 L
372.88 318.00 L
386.12 325.75 L
399.38 329.62 L
412.50 325.75 L
425.75 319.88 L
438.88 315.12 L
452.12 311.62 L
465.25 309.38 L
478.50 308.88 L
478.50 308.88 L
mstroke
[] sd
0 0 0 SetFore  UseFore
0 1 0 SetFore  UseFore
1.50 ps
newpath 82.62 308.50 M
95.88 308.62 L
109.00 308.00 L
122.25 307.00 L
135.38 305.62 L
148.62 307.38 L
161.75 302.50 L
175.00 301.00 L
188.25 299.75 L
201.38 299.00 L
214.62 298.62 L
227.75 297.38 L
241.00 294.00 L
254.12 290.12 L
267.38 286.12 L
280.62 282.38 L
293.75 279.25 L
307.00 282.38 L
320.12 288.12 L
333.38 293.25 L
346.50 295.75 L
359.75 305.75 L
372.88 305.25 L
386.12 300.88 L
399.38 296.50 L
412.50 296.50 L
425.75 300.50 L
438.88 303.88 L
452.12 306.50 L
465.25 308.12 L
478.50 308.50 L
478.50 308.50 L
mstroke
[] sd
0 0 0 SetFore  UseFore
0.250019 1 1 SetFore  UseFore
1.50 ps
newpath 82.62 283.38 M
95.88 284.25 L
109.00 287.25 L
122.25 293.00 L
135.38 302.50 L
148.62 304.12 L
161.75 292.50 L
175.00 279.00 L
188.25 284.88 L
201.38 293.50 L
214.62 298.38 L
227.75 297.00 L
241.00 293.88 L
254.12 289.88 L
267.38 285.88 L
280.62 282.25 L
293.75 279.12 L
307.00 282.38 L
320.12 288.12 L
333.38 293.25 L
346.50 295.75 L
359.75 284.75 L
372.88 282.50 L
386.12 287.25 L
399.38 292.00 L
412.50 292.62 L
425.75 289.25 L
438.88 286.75 L
452.12 284.88 L
465.25 283.75 L
478.50 283.38 L
478.50 283.38 L
mstroke
[] sd
0 0 0 SetFore  UseFore
1 0.500008 0.899992 SetFore  UseFore
1.50 ps
newpath 82.62 256.62 M
95.88 256.75 L
109.00 257.25 L
122.25 258.38 L
135.38 260.50 L
148.62 264.25 L
161.75 269.50 L
175.00 276.50 L
188.25 269.00 L
201.38 263.00 L
214.62 261.00 L
227.75 261.38 L
241.00 262.75 L
254.12 265.00 L
267.38 268.25 L
280.62 272.25 L
293.75 277.00 L
307.00 276.75 L
320.12 275.00 L
333.38 273.88 L
346.50 273.50 L
359.75 277.75 L
372.88 274.25 L
386.12 264.62 L
399.38 260.88 L
412.50 259.12 L
425.75 258.00 L
438.88 257.25 L
452.12 256.88 L
465.25 256.75 L
478.50 256.62 L
478.50 256.62 L
mstroke
[] sd
0 0 0 SetFore  UseFore
1.50 ps
newpath 82.62 230.50 M
95.88 231.88 L
109.00 236.00 L
122.25 241.62 L
135.38 247.62 L
148.62 252.62 L
161.75 256.38 L
175.00 258.75 L
188.25 260.12 L
201.38 260.75 L
214.62 261.00 L
227.75 261.38 L
241.00 262.75 L
254.12 265.00 L
267.38 268.25 L
280.62 272.25 L
293.75 277.00 L
307.00 276.62 L
320.12 274.88 L
333.38 273.75 L
346.50 273.38 L
359.75 269.50 L
372.88 266.00 L
386.12 263.12 L
399.38 256.00 L
412.50 248.38 L
425.75 242.12 L
438.88 237.12 L
452.12 233.38 L
465.25 231.25 L
478.50 230.50 L
478.50 230.50 L
mstroke
[] sd
1 0.250019 0.250019 SetFore  UseFore
1.50 ps
newpath 82.62 130.00 M
95.88 129.88 L
109.00 129.38 L
122.25 128.75 L
135.38 127.75 L
148.62 126.50 L
161.75 125.12 L
175.00 123.88 L
188.25 122.75 L
201.38 122.00 L
214.62 121.75 L
227.75 121.75 L
241.00 121.75 L
254.12 121.88 L
267.38 121.88 L
280.62 122.00 L
293.75 122.12 L
307.00 122.12 L
320.12 122.25 L
333.38 122.25 L
346.50 122.25 L
359.75 123.75 L
372.88 125.00 L
386.12 126.25 L
399.38 127.25 L
412.50 128.12 L
425.75 128.88 L
438.88 129.38 L
452.12 129.62 L
465.25 129.88 L
478.50 130.00 L
478.50 130.00 L
mstroke
[] sd
0 0 0 SetFore  UseFore
3.0518e-05 0.6 1.5259e-05 SetFore  UseFore
1.50 ps
newpath 82.62 114.38 M
95.88 114.38 L
109.00 114.62 L
122.25 115.00 L
135.38 115.62 L
148.62 116.88 L
161.75 118.50 L
175.00 119.88 L
188.25 120.88 L
201.38 121.50 L
214.62 121.75 L
227.75 121.75 L
241.00 121.75 L
254.12 121.75 L
267.38 121.88 L
280.62 122.00 L
293.75 122.00 L
307.00 122.12 L
320.12 122.12 L
333.38 122.25 L
346.50 122.25 L
359.75 120.75 L
372.88 119.12 L
386.12 117.62 L
399.38 116.12 L
412.50 114.75 L
425.75 113.50 L
438.88 113.88 L
452.12 114.12 L
465.25 114.38 L
478.50 114.38 L
478.50 114.38 L
mstroke
[] sd
0 0 0 SetFore  UseFore
0 0 1 SetFore  UseFore
1.50 ps
newpath 82.62 114.38 M
95.88 111.50 L
109.00 112.38 L
122.25 113.62 L
135.38 115.25 L
148.62 116.38 L
161.75 116.88 L
175.00 117.25 L
188.25 117.62 L
201.38 118.00 L
214.62 118.12 L
227.75 117.75 L
241.00 116.88 L
254.12 115.50 L
267.38 113.75 L
280.62 111.75 L
293.75 109.75 L
307.00 107.88 L
320.12 106.38 L
333.38 105.38 L
346.50 105.12 L
359.75 107.25 L
372.88 109.00 L
386.12 110.50 L
399.38 111.75 L
412.50 112.75 L
425.75 113.38 L
438.88 112.50 L
452.12 111.88 L
465.25 111.38 L
478.50 114.38 L
478.50 114.38 L
mstroke
[] sd
0 0 0 SetFore  UseFore
0.6 1.5259e-05 0.480003 SetFore  UseFore
1.50 ps
newpath 82.62 111.25 M
95.88 85.62 L
109.00 87.25 L
122.25 90.00 L
135.38 94.00 L
148.62 99.00 L
161.75 104.50 L
175.00 109.75 L
188.25 114.12 L
201.38 117.00 L
214.62 118.12 L
227.75 117.75 L
241.00 116.88 L
254.12 115.50 L
267.38 113.75 L
280.62 111.75 L
293.75 109.75 L
307.00 107.88 L
320.12 106.38 L
333.38 105.38 L
346.50 105.12 L
359.75 102.62 L
372.88 100.12 L
386.12 97.38 L
399.38 94.62 L
412.50 92.12 L
425.75 89.75 L
438.88 87.75 L
452.12 86.38 L
465.25 85.38 L
478.50 111.25 L
478.50 111.25 L
mstroke
[] sd
0 0 0 SetFore  UseFore
0.733333 0.733333 0.733333 SetFore  UseFore
1.50 ps
[] sd
0 0 0 SetFore  UseFore
1 0.500008 0.500008 SetFore  UseFore
1.50 ps
[] sd
0 0 0 SetFore  UseFore
0 1 0 SetFore  UseFore
1.50 ps
[] sd
0 0 0 SetFore  UseFore
0.250019 1 1 SetFore  UseFore
1.50 ps
[] sd
0 0 0 SetFore  UseFore
1 0 0 SetFore  UseFore
0.50 ps
104.00 465.25 114.00 465.25 0 CapLine
109.00 460.25 109.00 470.25 0 CapLine
104.00 431.75 114.00 431.75 0 CapLine
109.00 426.75 109.00 436.75 0 CapLine
104.00 389.62 114.00 389.62 0 CapLine
109.00 384.62 109.00 394.62 0 CapLine
104.00 345.38 114.00 345.38 0 CapLine
109.00 340.38 109.00 350.38 0 CapLine
104.00 328.00 114.00 328.00 0 CapLine
109.00 323.00 109.00 333.00 0 CapLine
104.00 313.38 114.00 313.38 0 CapLine
109.00 308.38 109.00 318.38 0 CapLine
104.00 307.00 114.00 307.00 0 CapLine
109.00 302.00 109.00 312.00 0 CapLine
104.00 293.12 114.00 293.12 0 CapLine
109.00 288.12 109.00 298.12 0 CapLine
104.00 258.38 114.00 258.38 0 CapLine
109.00 253.38 109.00 263.38 0 CapLine
104.00 241.75 114.00 241.75 0 CapLine
109.00 236.75 109.00 246.75 0 CapLine
104.00 128.75 114.00 128.75 0 CapLine
109.00 123.75 109.00 133.75 0 CapLine
104.00 115.25 114.00 115.25 0 CapLine
109.00 110.25 109.00 120.25 0 CapLine
104.00 113.75 114.00 113.75 0 CapLine
109.00 108.75 109.00 118.75 0 CapLine
104.00 90.38 114.00 90.38 0 CapLine
109.00 85.38 109.00 95.38 0 CapLine
0 0 0 SetFore  UseFore
1 0 0 SetFore  UseFore
0.50 ps
90.75 472.75 100.75 472.75 0 CapLine
95.75 467.75 95.75 477.75 0 CapLine
90.75 449.88 100.75 449.88 0 CapLine
95.75 444.88 95.75 454.88 0 CapLine
90.75 418.50 100.75 418.50 0 CapLine
95.75 413.50 95.75 423.50 0 CapLine
90.75 343.12 100.75 343.12 0 CapLine
95.75 338.12 95.75 348.12 0 CapLine
90.75 334.12 100.75 334.12 0 CapLine
95.75 329.12 95.75 339.12 0 CapLine
90.75 311.00 100.75 311.00 0 CapLine
95.75 306.00 95.75 316.00 0 CapLine
90.75 307.88 100.75 307.88 0 CapLine
95.75 302.88 95.75 312.88 0 CapLine
90.88 287.38 100.88 287.38 0 CapLine
95.88 282.38 95.88 292.38 0 CapLine
90.88 257.25 100.88 257.25 0 CapLine
95.88 252.25 95.88 262.25 0 CapLine
90.88 236.00 100.88 236.00 0 CapLine
95.88 231.00 95.88 241.00 0 CapLine
90.88 129.50 100.88 129.50 0 CapLine
95.88 124.50 95.88 134.50 0 CapLine
90.88 114.88 100.88 114.88 0 CapLine
95.88 109.88 95.88 119.88 0 CapLine
90.88 112.38 100.88 112.38 0 CapLine
95.88 107.38 95.88 117.38 0 CapLine
90.88 87.50 100.88 87.50 0 CapLine
95.88 82.50 95.88 92.50 0 CapLine
0 0 0 SetFore  UseFore
1 0 0 SetFore  UseFore
0.50 ps
433.88 447.62 443.88 447.62 0 CapLine
438.88 442.62 438.88 452.62 0 CapLine
433.88 439.75 443.88 439.75 0 CapLine
438.88 434.75 438.88 444.75 0 CapLine
433.88 428.25 443.88 428.25 0 CapLine
438.88 423.25 438.88 433.25 0 CapLine
433.88 338.12 443.88 338.12 0 CapLine
438.88 333.12 438.88 343.12 0 CapLine
433.88 338.00 443.88 338.00 0 CapLine
438.88 333.00 438.88 343.00 0 CapLine
433.88 315.12 443.88 315.12 0 CapLine
438.88 310.12 438.88 320.12 0 CapLine
433.88 304.00 443.88 304.00 0 CapLine
438.88 299.00 438.88 309.00 0 CapLine
433.88 286.75 443.88 286.75 0 CapLine
438.88 281.75 438.88 291.75 0 CapLine
433.88 257.25 443.88 257.25 0 CapLine
438.88 252.25 438.88 262.25 0 CapLine
433.88 237.12 443.88 237.12 0 CapLine
438.88 232.12 438.88 242.12 0 CapLine
433.88 129.38 443.88 129.38 0 CapLine
438.88 124.38 438.88 134.38 0 CapLine
433.88 113.88 443.88 113.88 0 CapLine
438.88 108.88 438.88 118.88 0 CapLine
433.88 112.62 443.88 112.62 0 CapLine
438.88 107.62 438.88 117.62 0 CapLine
433.88 87.88 443.88 87.88 0 CapLine
438.88 82.88 438.88 92.88 0 CapLine
0 0 0 SetFore  UseFore
AnObj restore
end
IgorSave restore
%%Trailer
%%DocumentFonts: Symbol
%%EOF
