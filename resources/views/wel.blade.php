<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Vue js</title>

        <!-- Fonts -->

        <!-- Styles -->

    </head>
    <body>
        <div id="app">
            <p>@{{ message }}</p>
            <input type="text" v-model="message">
            <ul>
                <li v-for="todo in todos">
                    @{{ todo }}

                </li>
            </ul>
            <button v-on:click="clickMe"> click Me</button>
        </div>

    {!! Html::script('js/vue.min.js') !!}
    {!! Html::script('js/script.js') !!}
    </body>
</html>
