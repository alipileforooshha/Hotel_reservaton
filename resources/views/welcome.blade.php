@include('layouts.navbar')

<div class="container my-4 d-flex justify-content-center align-items-center" id="Hotel-search-container">
    <div class="overlay"></div>
    <form action="POST" class="d-flex justify-content-center w-75" style="z-index: 1">
        @csrf
        <input class="form-control mx-2 bg-white fs-5" type="text" name="" id="">
        <select class="form-select mx-2 w-50 bg-white fs-5" name="" id="" style="font-size: 24px">
            <option class="h5 m-2" value="">همه</option>
            <option class="h5 m-2" value="">تهران</option>
            <option class="h5 m-2" value="">مشهد</option>
            <option class="h5 m-2" value="">قزوین</option>
            <option class="h5 m-2" value="">تبریز</option>
            <option class="h5 m-2" value="">اصفهان</option>
            <option class="h5 m-2" value="">کیش</option>
            <option class="h5 m-2" value="">شیراز</option>
        </select>
        <button type="submit" class="btn btn-success mx-2 fs-5">جستجو</button>
    </form>
</div>
<hr class="w-100">
<div class="container-fluid d-flex justify-content-between mb-4">
    <div class="card p-3 d-flex">
        <img class="card-img-top" src="{{asset('./Hotel_logo.png')}}" alt="" style="width: 250px;">
        <div class="card-body text-center">
            <a class="card-title h5 text-dark text-decoration-none">هتل اسپیناس پالاس</a>
        </div>
    </div>
    <div class="card p-3 d-flex">
        <img class="card-img-top" src="{{asset('./Hotel_logo.png')}}" alt="" style="width: 250px;">
        <div class="card-body text-center">
            <a class="card-title h5 text-dark text-decoration-none">هتل اسپیناس پالاس</a>
        </div>
    </div>
    <div class="card p-3 d-flex">
        <img class="card-img-top" src="{{asset('./Hotel_logo.png')}}" alt="" style="width: 250px;">
        <div class="card-body text-center">
            <a class="card-title h5 text-dark text-decoration-none">هتل اسپیناس پالاس</a>
        </div>
    </div>
    <div class="card p-3 d-flex">
        <img class="card-img-top" src="{{asset('./Hotel_logo.png')}}" alt="" style="width: 250px;">
        <div class="card-body text-center">
            <a class="card-title h5 text-dark text-decoration-none">هتل اسپیناس پالاس</a>
        </div>
    </div>
</div>