@extends('layout.app')

@section('content')

 <!-- Page Heading/Breadcrumbs -->
 <section id="hero" class="wow fadeIn">
 <div class="container-fluid">
    

       

        <!-- Content Row -->
        <div class="row">
        
        <!-- Content Column -->
        <div class="col-lg-9 mb-4">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="1-tab">
                <b>Introduction To Create And Edit Webpage</b>
                <div class="card">
                    <div class="card-header">
                        Windows Users
                    </div>
                    <div class="card-body">
                        <p>WindowsKey+R ကို ႏိွပ္ လိုက္ပါ။ Run Dialog Box တက္လာပါမည္။ ထုိ႕ေနာက္ notepad လုိ႕ရိုက္လိုက္ပါ။ ျပီးလွ်င္ OK ႏိွပ္ပါ။ သို႕မဟုတ္ Notepad++ သြင္းထားပါ။ Notepad ++ ကို ဖြင့္ျပီး HTML စတင္ အသံုးျပဳႏိုင္ပါသည္။</p>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-header">
                        Linux Users
                    </div>
                    <div class="card-body">
                        <p>
                        Ubuntu အသံုးျပဳသူမ်ားအေနနဲ႕ HTML အတြက္ gedit ကို အသံုးျပဳႏိုင္ပါသည္။ Applications -> Accessories -> Text Editor ကို ဖြင့္ပါ။ သို႕မဟုတ္ Alt+F2 ႏိွပ္ျပီး gedit လို႕ ရိုက္လိုက္ပါ။
                        </p>
                    </div>
                </div>

                <div class="card mt-2">
                    <div class="card-header">
                        Mac Users
                    </div>
                    <div class="card-body">
                    <p>Mac ကို အသံုးျပဳသူမ်ားအေနနဲ႕ Mac App Store က Text Wrangler သုိ႕မဟုတ္ Text Mate ကို အသံုးျပဳႏိုင္သည္။</p>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-header">
                        All platform
                    </div>
                    <div class="card-body">
                        <p>Platform အားလံုးအတြက္ Sublime Text 3 နဲ့ visual studio code ကို အသံုးျပဳႏိုင္သည္။</p>
                    </div>
                </div>
                <p>HTML ေရးေတာ့မယ္ဆိုရင္ ေအာက္ေဖာ္ျပပါ code လိုမ်ဳိး structure ရိွပါတယ္။</p>
                <div>
                <xmp> 
                    <!DOCTYPE html>
                    <html>
                        <head>
                        </head>
                        <body>
                        </body>
                    </html>
                </xmp>
                
                <blockquote>
                <pre>
                    <code>
                    HTML ေရးသားရာမွာ &lt;html&gt; နဲ႕ စျပီး &lt;/html&gt; နဲ႕ျပန္ပိတ္ရပါတယ္။ အဲဒီၾကားမွာ html code ေတြေရးရပါတယ။္ &lt;head&gt; နဲ႕ &lt;/head&gt; ၾကားတြင္ Title ထည့္ထားတာကို ေတြ႕မွာပါ။ 
                    Title သည္ Browser ၏ ထိပ္ bar တြင္ ေတြ႕ျမင္ရန္ျဖစ္သည္။ &lt;body&gt; နဲ႕ &lt;/body&gt; ၾကားမွာ မိမိ ႏွစ္သက္ရာ စာထည့္သြင္းေရးႏိုင္ပါတယ္။
                    *ကၽြန္ေတာ္ တုိ႕ Save သြင္းတဲ့ အခါမွာ .html နဲ႕ သိမ္းေပးဖို႕ လိုပါတယ္။*
                    </code>
                </pre>
                </blockquote>
                </div>
                </div>



                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="2-tab">
                    <div class="card">
                        <div class="card-header">
                            Meta
                        </div>
                        <div class="card-body">
                        <div id="editor">
                        <script type="text/plain" style="display: block;" id="ace-1">
                        <!DOCTYPE html>
                            <html>
                            <head>
                                <title>This is title</title>
                                <meta name="description" content="HTML5 book">
                                <meta name="keywords" content="HTML,CSS,XML,JavaScript">
                                <meta name="author" content="saturngod">
                                <meta charset="UTF-8">
                            </head>
                            <body>
                                Hello World!
                            </body>
                        </html>
                        </script> 
                        </div>
                            
                        </div>
                    </div>
                    
                </div>

                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="3-tab">
                    <p>3...</p>
                
                </div>
            </div>
        </div>
        </div>
    </div>
 </section>
    <!-- /.row -->
@endsection