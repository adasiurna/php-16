# Užduotis 1
1. Faile StyledText.php sukurkime klasę „StilizuotasTekstas“.
2. Klasėje „StyledText“ sukurkime kintamuosius:
◦ text,
◦ color

# Užduotis 2
3. Atsidarykite failą index.php , prisidėkite savo sukurtą klasę prie šio failo (panaudodami require_once f-ja).

4. Sukurkime objektą „heading“. Jai kintamąjį tekstas nustatykime į „Nauja antraštė“, o spalvą nustatykimte „red“.

5. Išveskime tokį html:

<div style="color:<?php echo $heading->color>"> <?php echo $heading->text; ?> </div>

6. Išbandykite kaip tai veikia jūsų sukurtas tinklapis.

7. Pakeiskite spalvą į green ir vėl išbandykite.
# Užduotis 3
Sukurkime metodą skirtą teksto išvedimui „output()“. Įvykdžius šį metodą tekstas turi būti išvestas į ekraną.

2. Išbandykime sukurtąjį metodą.

3. Spalvos pakeitimui sukurkime metodą „ changeColor($color) “, kuris pakeistų esamą spalvą.

4. Sukurkite naują parametrą (kintamąjį) size, pamėginkite sukurti jo keitimui skirtą metodą: changeSize($dydis), (kintamasis dydis turi būti skaitinis).

5. Išvedant tekstą nurodykite jog taip pat būtų išvestas ir jo size: style="font-size:16 px;"



# Užduotis 4
6. Nurodykime jog pradinė teksto spalva būtų raudona.

7. Nurodykite jog tekstas pagal nutylėjimą būtų 14px dydžio.

8. Metode changeColor nurodykime jog neitų pakeisti spalvos į baltą (white).


9. Metode changeSize nurodykite jog dydis negali būti mažesnis už 8px ir didesnis nei 24px
# Užduotis 5
1. Sukurkime konstruktorių kurio pagalba galėtumėme nurodyti tekstą.

2. Išbandykime programą

3. Padarykime taip, jog tekstą būtų galima ir nenurodyti objekto kūrimo metu.
# Užduotis 6
Kintamuosius color, size paslėpkime nuo išorės.
# Užduotis 7
Mūsų sukurtoje stilizavimo klasėje sukurkime magišką metodą _toString() kurio pagalba išvesime

stilizuotą tekstą į ekraną.



# Užduotis 8
Sukurkime dar vieną objektą „$subHeading“. Šiam objektui sukurkime papildomus kintamuosius ir išveskime į ekraną.
Sukurkime klasėje parametrą tag, kuris nurodys kokio tipo žymą turi sugeneruoti mūsų objektas. Pagal nutylėjimą padarykime taip, kad šis parametras būtų „div“ .
Sukurkime metodą skirtą nustatyti žymą: setTag($tag);
Modifikuokime išvedimo metodą taip, kad išvedus objektą, gautumėme ne kaip dabar <div> žymų elementą, bet tokių kokias nustatėme $tag kintamąjame
Atlikime antraščių, subAntraščių ir teksto (kaip paragrafo) išvedimą.


# Užduotis 9
Pamėginkime sukurti metodus:

◦ getParagraph()

◦ getHeader($level)

Kurie grąžintų atitinkamo tipo sugeneruotas žymas.


# Užduotis 10
1. Sukurkite klasę skirtą paveikslo atvaizdavimui.

2. Sukurtam objektui turime galėti nustatyti paveikslo URL

3. Turime galėti priskirti norimą ilgį ir plotį.

4. Turime galėti nustatyti kraštines, o įvykdžius echo turime gauti atgal tą paveikslą.