<?php
/********************************************************************
    Función getGCalendar 
*********************************************************************/
function getGCalendarGmail($event){
    $title = urlencode($event['title']);
    $description = urlencode($event['descriptionGmail']);
    $location = urlencode($event['location']);
    $start=new DateTime($event['Date_start'].' '.$event['start_time'].' '.date_default_timezone_get());
    $end=new DateTime($event['Date_end'].' '.$event['end_time'].' '.date_default_timezone_get()); 
    $dates = urlencode($start->format("Ymd\THis")) . "/" . urlencode($end->format("Ymd\THis"));
    $name = urlencode($event['name']);
    $url = urlencode($event['url']);
    $gCalUrl = "http://www.google.com/calendar/event?action=TEMPLATE&amp;text=$title&amp;dates=$dates&amp;details=$description&amp;location=$location&amp;trp=false&amp;sprop=$url&amp;sprop=name:$name";
    return ($gCalUrl);
}

function getCalendarYahoo ($event){
    $version = urlencode($event['version']);
    $title = urlencode($event['title']);
    $desc = urlencode($event['descriptionYahoo']);
    $st=new DateTime($event['Date_start'].' '.$event['start_time'].' '.date_default_timezone_get());
    $et=new DateTime($event['Date_end'].' '.$event['end_time'].' '.date_default_timezone_get()); 
    $dates = urlencode($st->format("Ymd\THis")) . "/" . urlencode($et->format("Ymd\THis"));
    $type = urlencode($event['type']);
    $in_loc = urlencode($event['location']);
    $url = urlencode($event['url']);
    $gCalUrlYahoo = "https://calendar.yahoo.com//?v=$version&type=$type&title=$title&st=$dates&desc=$desc&in_loc=$in_loc";
    return ($gCalUrlYahoo);
}

$evento = array(
    'title' => 'title Evento',
    'descriptionGmail' => 'En 3 días vencerá tu SOAT <br><a href="https://google.com.pe/soat" target="_blank">Renuevalo aqui</a>',
    'descriptionYahoo' => '
        En 3 días vencerá tu SOAT
        Renuevalo aqui 
        https://www.google.com.pe/soat',
    'location' => 'Perú',
    'Date_start' => '2018-07-12',
    'start_time'=>'12:30',
    'Date_end'=>'2018-07-12',
    'end_time'=>'13:00',
    'name'=>'google',
    'url'=>'https://www.google.com.pe/soat',
    'type'=>'20',
    'version' => '60'
);
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>google</title>
</head>

<body style="font-family: arial, helvetica">
    <p style="display:none;">SOAT desde S/66 con beneficios gratis. Recíbelo al instante.</p>
    <p style="display:none;">SOAT a S/{!! $precio !!} con beneficios gratis. Termina tu compra.</p>
    <table cellpadding="0" cellspacing="0" border="0" align="center" width="680">
        <tr>
            <td>
                <table cellpadding="0" cellspacing="0" border="0" align="center" width="680">
                    <td width="680">
                        <a href="{!! $url . 'continuarCompra/' . $tokenCC !!}?utm_source=Marketing&utm_medium=Email&utm_campaign=Emailing_Remarketing_Motivo_celular&utm_content=logo_cabecera">
                            <img src="{!! $url . 'imagenes/emailing/01/logo-up.gif' !!}" alt="" style="border: 0; display: block;">
                        </a>
                    </td>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <a href="{!! $url . 'continuarCompra/' . $tokenCC !!}?utm_source=Marketing&utm_medium=Email&utm_campaign=Emailing_Remarketing_Motivo_celular&utm_content=cuerpo_texto">
                    <table cellpadding="0" cellspacing="0" border="0" align="center" width="680" style="background: #fff">
                        <td width="680" height="41"></td>
                    </table>
                </a>
            </td>
        </tr>
        <tr>
            <td style="background: #fff;" width="680">
                <a style="text-decoration: none" href="{!! $url . 'continuarCompra/' . $tokenCC !!}?utm_source=Marketing&utm_medium=Email&utm_campaign=Emailing_Remarketing_Motivo_celular&utm_content=cuerpo_texto">
                    <table cellpadding="0" cellspacing="0" border="0" align="center" width="680">
                        <tr>
                            <td width="680" height="30" valign="bottom" style="font-size: 34px; text-align: center; font-family: sans-serif; color: #02aeee; vertical-align: middle; line-height: 38px">
                                <span style="color: #02aeee">
                                    <strong>¿Aún necesitas el SOAT
                                        <br>para tu Toyota?</strong>
                                </span>
                            </td>
                        </tr>
                    </table>
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <table cellpadding="0" cellspacing="0" border="0" align="center" width="680">
                    <td width="680">
                        <a href="{!! $url . 'continuarCompra/' . $tokenCC !!}?utm_source=Marketing&utm_medium=Email&utm_campaign=Emailing_Remarketing_Motivo_celular&utm_content=cuerpo_celular">
                            <img src="{!! $url . 'imagenes/emailing/01/center.png' !!}" alt="" style="border: 0; display: block;">
                        </a>
                    </td>
                </table>
            </td>
        </tr>
        <tr>
            <td width="680">
                <a style="text-decoration: none" href="{!! $url . 'continuarCompra/' . $tokenCC !!}?utm_source=Marketing&utm_medium=Email&utm_campaign=Emailing_Remarketing_Motivo_celular&utm_content=precio">
                    <table cellpadding="0" cellspacing="0" border="0" align="center" width="680">
                        <td width="180" height="139" align="center">
                        </td>

                        <td style="text-align: center; font-family: sans-serif; color: #000; vertical-align: middle" align="center" width="335">
                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="350">
                                <tr>
                                    <td align="center" style="line-height: 55px">
                                        <span style="color: #8c8c8c; font-size: 18px">desde</span>
                                        <br>
                                        <strong>
                                            <span style="color: #000000; font-size: 100px">S/. 66</span>
                                        </strong>
                                        <br>
                                    </td>
                                </tr>
                            </table>
                        </td>

                        <td width="165" height="139" align="center">
                        </td>
                    </table>
                </a>
            </td>
        </tr>


        <tr>
            <td>
                <table cellpadding="0" cellspacing="0" border="0" align="center" width="680">
                    <td width="680">
                        <a href="{!! $url . 'continuarCompra/' . $tokenCC !!}?utm_source=Marketing&utm_medium=Email&utm_campaign=Emailing_Remarketing_Motivo_celular&utm_content=boton">
                            <img src="{!! $url . 'imagenes/emailing/01/button-green.png' !!}" alt="" style="border: 0; display: block;">
                        </a>
                    </td>
                </table>
            </td>
        </tr>

        <tr>
            <td>
                <a href="{!! $url . 'continuarCompra/' . $tokenCC !!}?utm_source=Marketing&utm_medium=Email&utm_campaign=Emailing_Remarketing_Motivo_celular&utm_content=boton">
                    <table cellpadding="0" cellspacing="0" border="0" align="center" width="680" style="background: #fff">
                        <td width="680" height="32"></td>
                    </table>
                </a>
            </td>
        </tr>

        <tr>
            <td style="text-align: justify; color: #758592; font-family: arial, helvetica; font-size: 11px; background: #f4f4f4; line-height: 14px">
                <table cellpadding="0" cellspacing="0" border="0" align="center" width="680">
                    <tr>
                        <td width="6%"></td>
                        <td width="88%">
                            <br>
                            <br> Desde el 31 de Julio de 2017 entró en vigencia el SOAT Electrónico de acuerdo al Decreto Supremo
                            N° 012-2017-MTC. El SOAT Electrónico tiene las mismas coberturas que el SOAT Tradicional. Te
                            enviaremos el certificado a tu correo electrónico y a tu celular o si prefieres puedes comprar
                            el SOAT físico y te lo enviamos al lugar de tu elección. Aplican restricciones de entrega. Encuentra
                            más información sobre las zonas de reparto aquí. Si al momento de recibir esta comunicación ya
                            renovaste tu SOAT, te pedimos dejar sin efecto este aviso. Precios exclusivos para compras hechas
                            a través de la web
                            <a href="{!! $url . 'continuarCompra/' . $tokenCC !!}?utm_source=Marketing&utm_medium=Email&utm_campaign=Emailing_Remarketing_Motivo_celular&utm_content=legal"
                                style="color: #02aeee; text-decoration: none">www.google.com.pe/soat/</a>
                            <br>
                            <br> Los pagos pueden realizarse con tarjeta de crédito Visa, American Express, MasterCard, Diners
                            Club o con tarjeta de débito. Para más información ingresa
                            <a href="https://www.google.com.pe/soat/terminos-y-condiciones?utm_source=Marketing&utm_medium=Email&utm_campaign=Emailing_Remarketing_Motivo_celular&utm_content=legal"
                                style="color: #02aeee; text-decoration: none">aquí</a>
                            <br>
                            <br>

                            <hr style="color:#d7d7d7">
                        </td>
                        <td width="6%"></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="text-align: justify; color: #758592; font-family: arial, helvetica; font-size: 11px; background: #f4f4f4; line-height: 14px">
                <table cellpadding="0" cellspacing="0" border="0" align="center" width="680">
                    <tr>
                        <td height="15"></td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{!! $url . 'continuarCompra/' . $tokenCC !!}?utm_source=Marketing&utm_medium=Email&utm_campaign=Emailing_Remarketing_Motivo_celular&utm_content=logo_footer">
                                <img align="center" src="{!! $url . 'imagenes/emailing/01/logo-down.gif' !!}">
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td height="136" style="text-align: center; color: #758592; font-family: arial, helvetica; font-size: 11px; background: #f4f4f4; line-height: 16px">

                Este correo electr&oacute;nico fue enviado por google.
                <br>Si no deseas recibir m&aacute;s comunicaciones haz clic
                <a href="{!! $url . 'newsletter/cancelarSuscripcion/'. $token !!}"
                    style="color:#009bdb; font-family:arial; font-size:12px;">aqu&iacute;</a>.
                <br>
                <br> Direcci&oacute;n: Av. Paseo de la Rep&uacute;blica 3071, San Isidro - Lima 27 - Per&uacute;
                <br>
                <a href="{!! $url . 'continuarCompra/' . $tokenCC !!}?utm_source=Marketing&utm_medium=Email&utm_campaign=Emailing_Remarketing_Motivo_celular&utm_content=texto_footer"
                    style="color: #02aeee ;text-decoration: none">servicios@google.com.pe</a>
                <br> &reg;Derechos reservados.
                <br>
                <br>
                    <p class="text-eventos">Agrega este evento a tu calendario </>
                <br>
                <div class="email-calendar">
                <a href="" onclick="javascript:cal_single.download('Renueva tu SOAT')">
                    <img src="icon_apple.png" alt="Calendar Apple">
                </a>
                <a target="_blank" href="<?php echo getGCalendarGmail($evento); ?>">
                    <img src="googleicon.png" alt="">
                </a>
                <a onclick="javascript:cal_single.download('Renueva tu SOAT')">
                        <img src="outlook.png" alt="">
                </a>
                <a target="_blank" href="<?php echo getCalendarYahoo($evento); ?>">
                    <img src="icon_yahoo.png" alt="Calendar Yahoo">    
                </a>
                </div>
                   
                </tr>
            </td>
        </tr>

    </table>
</body>
<script type="text/javascript">
        var saveAs = saveAs || function (e) { "use strict"; if (typeof e === "undefined" || typeof navigator !== "undefined" && /MSIE [1-9]\./.test(navigator.userAgent)) { return } var t = e.document, n = function () { return e.URL || e.webkitURL || e }, r = t.createElementNS("http://www.w3.org/1999/xhtml", "a"), o = "download" in r, a = function (e) { var t = new MouseEvent("click"); e.dispatchEvent(t) }, i = /constructor/i.test(e.HTMLElement) || e.safari, f = /CriOS\/[\d]+/.test(navigator.userAgent), u = function (t) { (e.setImmediate || e.setTimeout)(function () { throw t }, 0) }, s = "application/octet-stream", d = 1e3 * 40, c = function (e) { var t = function () { if (typeof e === "string") { n().revokeObjectURL(e) } else { e.remove() } }; setTimeout(t, d) }, l = function (e, t, n) { t = [].concat(t); var r = t.length; while (r--) { var o = e["on" + t[r]]; if (typeof o === "function") { try { o.call(e, n || e) } catch (a) { u(a) } } } }, p = function (e) { if (/^\s*(?:text\/\S*|application\/xml|\S*\/\S*\+xml)\s*;.*charset\s*=\s*utf-8/i.test(e.type)) { return new Blob([String.fromCharCode(65279), e], { type: e.type }) } return e }, v = function (t, u, d) { if (!d) { t = p(t) } var v = this, w = t.type, m = w === s, y, h = function () { l(v, "writestart progress write writeend".split(" ")) }, S = function () { if ((f || m && i) && e.FileReader) { var r = new FileReader; r.onloadend = function () { var t = f ? r.result : r.result.replace(/^data:[^;]*;/, "data:attachment/file;"); var n = e.open(t, "_blank"); if (!n) e.location.href = t; t = undefined; v.readyState = v.DONE; h() }; r.readAsDataURL(t); v.readyState = v.INIT; return } if (!y) { y = n().createObjectURL(t) } if (m) { e.location.href = y } else { var o = e.open(y, "_blank"); if (!o) { e.location.href = y } } v.readyState = v.DONE; h(); c(y) }; v.readyState = v.INIT; if (o) { y = n().createObjectURL(t); setTimeout(function () { r.href = y; r.download = u; a(r); h(); c(y); v.readyState = v.DONE }); return } S() }, w = v.prototype, m = function (e, t, n) { return new v(e, t || e.name || "download", n) }; if (typeof navigator !== "undefined" && navigator.msSaveOrOpenBlob) { return function (e, t, n) { t = t || e.name || "download"; if (!n) { e = p(e) } return navigator.msSaveOrOpenBlob(e, t) } } w.abort = function () { }; w.readyState = w.INIT = 0; w.WRITING = 1; w.DONE = 2; w.error = w.onwritestart = w.onprogress = w.onwrite = w.onabort = w.onerror = w.onwriteend = null; return m }(typeof self !== "undefined" && self || typeof window !== "undefined" && window || this.content); if (typeof module !== "undefined" && module.exports) { module.exports.saveAs = saveAs } else if (typeof define !== "undefined" && define !== null && define.amd !== null) { define("FileSaver.js", function () { return saveAs }) }
        var ics = function (e, t) { "use strict"; { if (!(navigator.userAgent.indexOf("MSIE") > -1 && -1 == navigator.userAgent.indexOf("MSIE 10"))) { void 0 === e && (e = "default"), void 0 === t && (t = "Calendar"); var r = -1 !== navigator.appVersion.indexOf("Win") ? "\r\n" : "\n", n = [], i = ["BEGIN:VCALENDAR", "PRODID:" + t, "VERSION:2.0"].join(r), o = r + "END:VCALENDAR", a = ["SU", "MO", "TU", "WE", "TH", "FR", "SA"]; return { events: function () { return n }, calendar: function () { return i + r + n.join(r) + o }, addEvent: function (t, i, o, l, u, s) { if (void 0 === t || void 0 === i || void 0 === o || void 0 === l || void 0 === u) return !1; if (s && !s.rrule) { if ("YEARLY" !== s.freq && "MONTHLY" !== s.freq && "WEEKLY" !== s.freq && "DAILY" !== s.freq) throw "Recurrence rrule frequency must be provided and be one of the following: 'YEARLY', 'MONTHLY', 'WEEKLY', or 'DAILY'"; if (s.until && isNaN(Date.parse(s.until))) throw "Recurrence rrule 'until' must be a valid date string"; if (s.interval && isNaN(parseInt(s.interval))) throw "Recurrence rrule 'interval' must be an integer"; if (s.count && isNaN(parseInt(s.count))) throw "Recurrence rrule 'count' must be an integer"; if (void 0 !== s.byday) { if ("[object Array]" !== Object.prototype.toString.call(s.byday)) throw "Recurrence rrule 'byday' must be an array"; if (s.byday.length > 7) throw "Recurrence rrule 'byday' array must not be longer than the 7 days in a week"; s.byday = s.byday.filter(function (e, t) { return s.byday.indexOf(e) == t }); for (var c in s.byday) if (a.indexOf(s.byday[c]) < 0) throw "Recurrence rrule 'byday' values must include only the following: 'SU', 'MO', 'TU', 'WE', 'TH', 'FR', 'SA'" } } var g = new Date(l), d = new Date(u), f = new Date, S = ("0000" + g.getFullYear().toString()).slice(-4), E = ("00" + (g.getMonth() + 1).toString()).slice(-2), v = ("00" + g.getDate().toString()).slice(-2), y = ("00" + g.getHours().toString()).slice(-2), A = ("00" + g.getMinutes().toString()).slice(-2), T = ("00" + g.getSeconds().toString()).slice(-2), b = ("0000" + d.getFullYear().toString()).slice(-4), D = ("00" + (d.getMonth() + 1).toString()).slice(-2), N = ("00" + d.getDate().toString()).slice(-2), h = ("00" + d.getHours().toString()).slice(-2), I = ("00" + d.getMinutes().toString()).slice(-2), R = ("00" + d.getMinutes().toString()).slice(-2), M = ("0000" + f.getFullYear().toString()).slice(-4), w = ("00" + (f.getMonth() + 1).toString()).slice(-2), L = ("00" + f.getDate().toString()).slice(-2), O = ("00" + f.getHours().toString()).slice(-2), p = ("00" + f.getMinutes().toString()).slice(-2), Y = ("00" + f.getMinutes().toString()).slice(-2), U = "", V = ""; y + A + T + h + I + R != 0 && (U = "T" + y + A + T, V = "T" + h + I + R); var B, C = S + E + v + U, j = b + D + N + V, m = M + w + L + ("T" + O + p + Y); if (s) if (s.rrule) B = s.rrule; else { if (B = "rrule:FREQ=" + s.freq, s.until) { var x = new Date(Date.parse(s.until)).toISOString(); B += ";UNTIL=" + x.substring(0, x.length - 13).replace(/[-]/g, "") + "000000Z" } s.interval && (B += ";INTERVAL=" + s.interval), s.count && (B += ";COUNT=" + s.count), s.byday && s.byday.length > 0 && (B += ";BYDAY=" + s.byday.join(",")) } (new Date).toISOString(); var H = ["BEGIN:VEVENT", "UID:" + n.length + "@" + e, "CLASS:PUBLIC", "DESCRIPTION:" + i, "DTSTAMP;VALUE=DATE-TIME:" + m, "DTSTART;VALUE=DATE-TIME:" + C, "DTEND;VALUE=DATE-TIME:" + j, "LOCATION:" + o, "SUMMARY;LANGUAGE=en-us:" + t, "TRANSP:TRANSPARENT", "END:VEVENT"]; return B && H.splice(4, 0, B), H = H.join(r), n.push(H), H }, download: function (e, t) { if (n.length < 1) return !1; t = void 0 !== t ? t : ".ics", e = void 0 !== e ? e : "calendar"; var a, l = i + r + n.join(r) + o; if (-1 === navigator.userAgent.indexOf("MSIE 10")) a = new Blob([l]); else { var u = new BlobBuilder; u.append(l), a = u.getBlob("text/x-vCalendar;charset=" + document.characterSet) } return saveAs(a, e + t), l }, build: function () { return !(n.length < 1) && i + r + n.join(r) + o } } } console.log("Unsupported Browser") } };
        cal_single = ics();
        cal_single.addEvent('title Evento',
            'description',
            'Perú', '2018/07/13 10:09',
            '2018/07/13 10:10');
</script>
</html>