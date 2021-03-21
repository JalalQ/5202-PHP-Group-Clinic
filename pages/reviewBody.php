
<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Leave a Review</h1>
            <p class="lead text-muted"></p>
        </div>
    </section>


    <div class="album py-5 bg-light">
        <div class="container">
            <form action="/">
                <h1>Doctor Review</h1>
                <h4>Select the name of the Doctor<span>*</span></h4>
                <select>
                    <option value=""></option>
                    <option value="1">Dr Deo</option>
                    <option value="2">Dr Ali</option>
                    <option value="3">Dr Jason</option>
                    <option value="4">Dr Tiffny</option>
                </select>

                <p>
                <h4>How was your overall experience?</h4>
                </p>
                <table>
                    <tr>
                        <th class="first-col" style="width:230px"></th>
                        <th style="width:230px">Below Expectations</th>
                        <th style="width:230px">Meets Expectations</th>
                        <th style="width:230px">Exceeds Expectations</th>
                    </tr>
                    <tr>
                        <td class="first-col">Professional</td>
                        <td><input type="radio" value="none" name="professional" /></td>
                        <td><input type="radio" value="none" name="professional" /></td>
                        <td><input type="radio" value="none" name="professional" /></td>
                    </tr>
                    <tr>
                        <td class="first-col">Friendly</td>
                        <td><input type="radio" value="none" name="Friendly" /></td>
                        <td><input type="radio" value="none" name="Friendly" /></td>
                        <td><input type="radio" value="none" name="Friendly" /></td>
                    </tr>
                    <tr>
                        <td class="first-col">Knowledgeable</td>
                        <td><input type="radio" value="none" name="know" /></td>
                        <td><input type="radio" value="none" name="know" /></td>
                        <td><input type="radio" value="none" name="know" /></td>
                    </tr>
                </table>

                <p>
                    <h4>Feedback?</h4>
                    <textarea rows="5" cols="50"></textarea>
                </p>

                <p>
                    <h4>Email</h4>
                    <input class="email" type="text" name="name" />
                </p>


                <a href="#" class="btn btn-primary my-2">Submit Feedback</a>

            </form>
        </div>
    </div>


</main>
