<x-mail::message>
# Welcome to Our Services

<h1>Hello {{ $companyName}},</h1>
<p> We are very excited to have you on board</p>
<p> Thank you for choosing our service</p>

<footer>
    <table>
        <tr>
            <td style= "display: flex; justify-content:center; align-items: center;">
                <img src="{{asset('images/logo/Nf3-Logo-Blue.png')}}" alt="Knightf3 logo" style="width: 100px; height:auto"/>
            </td>
        </tr>
        <tr> 
            <td> 
                <p>Best Regards,</p>
                <p> Knighf3 Buisness Solutions</p>
                <p>Address: </p>
                <p>Email: info@knightf3.co.za</p>
            </td>
        </tr>
    </table>
</footer>
{{ config('app.name') }}
</x-mail::message>
