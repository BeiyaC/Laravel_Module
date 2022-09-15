<x-layout>
    <table>
        <tr>
            <td>
                <br><br>
            </td>
            <td>
                Price TTC:
            </td>
            <td>
                Price HT:
            </td>
            <td>
                Weight:
            </td>
            <td>
                Discount:
            </td>
            <td>
                Quantity:
            </td>
        </tr>
        <tr>
            <td rowspan="2">
                <img src="">
            </td>
            <td>
                <p style="color:red; text-decoration: line-through;">
                </p><br>
                <p style="color:green; font-size:150%; text-decoration: underline;">
                </p>
            </td>
            <td>
                <p style="color:red; text-decoration: line-through;">
                </p><br>
                <p style="color:green; font-size:150%; text-decoration: underline;">
                </p><br>
                <p>
                    TVA:
                </p>
            </td>
            <td>
               g
            </td>
            <td>
                <p style="color:green; font-size:150%;">
                    - x %
                </p>
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                Total TTC:
                <p style="color:red; text-decoration: line-through;">
                </p>
                <p style="color:green; font-size:150%; text-decoration: underline;">
                </p>
            </td>
            <td colspan="2">

                Total HT:
                <p style="color:red; text-decoration: line-through;">
                </p>
                <p style="color:green; font-size:150%; text-decoration: underline;">
                </p>
                <p>
                    TVA:
                </p>
            </td>
            <td>
                Change quantity:<br>
                <form action="cart" method="post" >
                    <input type="hidden" name="key" value="">
                    <input type="hidden" name="delivery" value="">
                    <input type="number" id="quantity" name="quantity" min="1" max="6">
                    <input type="submit" value="Confirm Quantity">
                </form>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                Choose delivery:<br>
                <form action="cart" method="post" >
                    <input type="hidden" name="key" value="">
                    <input type="hidden" name="quantity" value="">
                    <select name="delivery" id="delivery">
                        <option value="" ></option>
                        <option value="La Poste" > La Poste </option>
                        <option value="DHL"> DHL </option>
                    </select>
                    <input type="submit" value="Confirm Delivery">
                </form>
            </td>
            <td colspan="2">
                <div></div>
            </td>
        </tr>
        <tr>
            <td colspan="6">
                <form action="" method="post">
                    <input type="hidden" name="key" value="">
                    <input type="hidden" name="quantity" value="">
                    <input type="hidden" name="delivery" value="">
                    <input type="submit" value="Confirm Order">
                </form>
            </td>
        </tr>
    </table>
</x-layout>
