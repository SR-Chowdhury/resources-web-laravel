<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Common Accordion</title>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/assets/accordion/accordionv7/css/accordionv7.css') }}" />
</head>

<body>

    <h1>Vertical Accordion</h1>
    <section style="text-align: center;">
        <div id="accordion3" class="accordionWrapper" style="width:486px;">
            <div class="set set1">
                <div class="title"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu1.jpg') }}"
                        width="198" height="29" /></div>
                <div class="content"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu-img-1.jpg') }}"
                        width="486" height="198" /></div>
            </div>
            <div class="set set2">
                <div class="title"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu2.jpg') }}"
                        width="198" height="29" /></div>
                <div class="content"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu-img-2.jpg') }}"
                        width="486" height="198" /></div>
            </div>
            <div class="set set3">
                <div class="title"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu3.jpg') }}"
                        width="198" height="29" /></div>

                <div class="content"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu-img-3.jpg') }}"
                        width="486" height="198" /></div>
            </div>
            <div class="set set4">

                <div class="title"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu4.jpg') }}"
                        width="198" height="29" /></div>
                <div class="content"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu-img-4.jpg') }}"
                        width="486" height="198" /><br />
                </div>
            </div>
            <div class="set set5">
                <div class="title"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu5.jpg') }}"
                        width="198" height="29" /></div>
                <div class="content"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu-img-5.jpg') }}"
                        width="486" height="198" /></div>
            </div>
            <div class="set set6">

                <div class="title"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu6.jpg') }}"
                        width="198" height="29" /></div>
                <div class="content"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu-img-6.jpg') }}"
                        width="486" height="198" /></div>
            </div>
            <div class="set set7">
                <div class="title"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu7.jpg') }}"
                        width="198" height="29" /></div>
                <div class="content"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu-img-7.jpg') }}"
                        width="486" height="198" /></div>
            </div>
        </div>
    </section>


    <script language="javascript" type="text/javascript"
        src="{{ asset('public/assets/accordion/accordionv7/js/jquery-1.3.2.min.js') }}"></script>
    <script language="javascript" type="text/javascript"
        src="{{ asset('public/assets/accordion/accordionv7/js/jquery.msAccordion.js') }}"></script>

    <script language="javascript" type="text/javascript">
        $(document).ready(function () {
            $("#accordionGiftLelo").msAccordion({
                defaultid: 1
            });
            $("#accordion1").msAccordion({
                defaultid: 6,
                autodelay: 2
            });

            $("#accordionNested").msAccordion({
                defaultid: 2
            });
            $("#accordionNestedChild").msAccordion({
                defaultid: 2,
                vertical: true
            });

            $("#accordion3").msAccordion({
                vertical: true
            });
        });

    </script>
</body>

</html>
