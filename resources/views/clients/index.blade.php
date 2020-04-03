@extends('layout')

@section('content')
<div class="row">
    <div class="medium-12 large-12 columns">
        <h4>KLANTEN</h4>
        <div class="medium-2  columns"><a class="button hollow success" href="./clients_new.html">VOEG KLANT TOE</a>
        </div>



        <table class="stack">
            <thead>
                <tr>
                    <th width="200">Name</th>
                    <th width="200">Email</th>
                    <th width="200">Action</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>Mr. Herr Seele</td>
                    <td>herr.seele@humo.be</td>
                    <td>
                        <a class="hollow button" href="./clients_new.html">BEWERK</a>
                        <a class="hollow button warning" href="./book_room.html">BOEK EEN KAMER</a>
                    </td>
                </tr>

                <tr>
                    <td>Mr. Luc Charles Zeebroek</td>
                    <td>kamagurka@humo.be</td>
                    <td>
                        <a class="hollow button" href="./clients_new.html">BEWERK</a>
                        <a class="hollow button warning" href="./book_room.html">BOEK EEN KAMER</a>
                    </td>
                </tr>
                <tr>
                    <td>Ms. Eva Moutin</td>
                    <td>eva.mouton@flair.be</td>
                    <td>
                        <a class="hollow button" href="./clients_new.html">BEWERK</a>
                        <a class="hollow button warning" href="./book_room.html">BOEK EEN KAMER</a>
                    </td>
                </tr>

            </tbody>
        </table>


    </div>
</div>
@endsection
