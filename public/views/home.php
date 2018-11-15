
<html>
<head>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>

    <script>
        const app = new Vue({
            el: '#app',
            data: {
                errors: [],
                searchterm: null,
                number: null
            },
            methods:{
                checkForm: function (e) {
                    if (this.searchterm) {
                        return true;
                    }

                    this.errors = [];

                    if (!this.searchterm) {
                        this.errors.push('Search Term required.');
                    }
                    e.preventDefault();
                }
            }
        })
    </script>


</head>

<body>

<div align = "center">
<h2>Search YouTube Videos</h2>
<form
id="app"
@submit="checkForm"
action="/process"
method="post"
>

<p>
    <label for="searchterm">Search Term</label>&ensp;
    <input
        id="searchterm"
        v-model="searchterm"
        type="searchterm"
        name="searchterm"
    >
</p>

<p>
    <label for="number">Number of Videos</label>&ensp;

    <select
            id="number"
            v-model="number"
            name="number"
    >

    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>

    <option>11</option>
    <option>12</option>
    <option>13</option>
    <option>14</option>
    <option>15</option>
    <option>16</option>
    <option>17</option>
    <option>18</option>
    <option>19</option>
    <option>20</option>

    <option>21</option>
    <option>22</option>
    <option>23</option>
    <option>24</option>
    <option>25</option>
    <option>26</option>
    <option>27</option>
    <option>28</option>
    <option>29</option>
    <option>30</option>

    <option>31</option>
    <option>32</option>
    <option>33</option>
    <option>34</option>
    <option>35</option>
    <option>36</option>
    <option>37</option>
    <option>38</option>
    <option>39</option>
    <option>40</option>

    <option>41</option>
    <option>42</option>
    <option>43</option>
    <option>44</option>
    <option>45</option>
    <option>46</option>
    <option>47</option>
    <option>48</option>
    <option>49</option>
    <option>50</option>

    </select>
</p>

<p>
    <input
        type="submit"
        value="Submit"
    >
</p>

</form>
</div>


<?php

/**
 * Created by PhpStorm.
 * User: obinnajohnphill
 * Date: 14/11/18
 * Time: 17:31
 */

include dirname(__FILE__).'/../../vendor/autoload.php';

//use Obinna\YoutubeVideosModel;
//use Obinna\Controllers\YoutubeVideosController;


//$user = new YoutubeVideosModel();
//$page = new YoutubeVideosController();

//$helloUser = $user->sayhello();
//$hellopage = $page->another();


?>


</body>
</html>

