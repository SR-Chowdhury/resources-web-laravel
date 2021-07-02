<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Common Accordion</title>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/assets/accordion/accordionv6/css/accordionv6.css') }}" />
</head>

<body>

    <h1>Nested Accordion - Click on set 2</h1>

    <section style="text-align:center;">
        <div class="accordionWrapper" id="accordionNested">
            <div class="set set1">
                <div class="title"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu1-h.jpg') }}"
                        width="30" height="198" /></div>
                <div class="content"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu-img-1.jpg') }}"
                        width="486" height="198" /></div>
            </div>
            <div class="set set2">

                <div class="title"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu2-h.jpg') }}"
                        width="30" height="198" /></div>
                <div class="content">
                    <div id="accordionNestedChild">
                        <div class="set set1">
                            <div class="title"><img
                                    src="{{ asset('public/assets/accordion/accordionv5/images/DEVIL_EYES.jpg') }}"
                                    width="198" height="29" /></div>
                            <div class="content"><a href="#"><img
                                        src="{{ asset('public/assets/accordion/accordionv5/images/devilEyes.jpg') }}"
                                        alt="Embroidered Devil Eyes" width="486" height="198" border="0" /></a></div>
                        </div>
                        <div class="set set2">
                            <div class="title"><img
                                    src="{{ asset('public/assets/accordion/accordionv5/images/SPRING_EMBROIDERY.jpg') }}"
                                    width="198" height="29" /></div>

                            <div class="content"><a href="#"><img
                                        src="{{ asset('public/assets/accordion/accordionv5/images/spring-emroidery.jpg') }}"
                                        alt="Spring Embroidery" width="486" height="198" border="0" /></a></div>
                        </div>
                        <div class="set set3">
                            <div class="title"><img
                                    src="{{ asset('public/assets/accordion/accordionv5/images/CHARMING_FAIRY.jpg') }}"
                                    width="198" height="29" /></div>
                            <div class="content"><a href="#"><img
                                        src="{{ asset('public/assets/accordion/accordionv5/images/charmingFairy.jpg') }}"
                                        alt="" width="486" height="198" border="0" /></a> </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="set set3">
                <div class="title"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu3-h.jpg') }}"
                        width="30" height="198" /></div>
                <div class="content"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu-img-3.jpg') }}"
                        width="486" height="198" />
                </div>
            </div>
            <div class="set set4">
                <div class="title"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu4-h.jpg') }}"
                        width="30" height="198" /></div>
                <div class="content"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu-img-4.jpg') }}"
                        width="486" height="198" /><br />
                </div>
            </div>
            <div class="set set5">
                <div class="title"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu5-h.jpg') }}"
                        width="30" height="198" /></div>

                <div class="content"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu-img-5.jpg') }}"
                        width="486" height="198" /></div>
            </div>
            <div class="set set6">
                <div class="title"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu6-h.jpg') }}"
                        width="30" height="198" /></div>
                <div class="content"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu-img-6.jpg') }}"
                        width="486" height="198" /></div>
            </div>
            <div class="set set7">
                <div class="title"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu7-h.jpg') }}"
                        width="30" height="198" /></div>
                <div class="content"><img src="{{ asset('public/assets/accordion/accordionv5/images/menu-img-7.jpg') }}"
                        width="486" height="198" /></div>
            </div>
        </div>
    </section>

    <script language="javascript" type="text/javascript"
        src="{{ asset('public/assets/accordion/accordionv6/js/jquery-1.3.2.min.js') }}"></script>
    <script language="javascript" type="text/javascript"
        src="{{ asset('public/assets/accordion/accordionv6/js/jquery.msAccordion.js') }}"></script>

    <script language="javascript" type="text/javascript">
        $(document).ready(function () {

            $("#accordionNested").msAccordion({
                defaultid: 2
            });
            $("#accordionNestedChild").msAccordion({
                defaultid: 2,
                vertical: true
            });

        });

    </script>
</body>

</html>
