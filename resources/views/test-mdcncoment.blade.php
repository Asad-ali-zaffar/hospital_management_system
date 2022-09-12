{{-- <div class="col-4">
    <div class="form-group row">

        <label for="basic-url" class="required form-label">Select Lab Test </label>

        <!--begin::Input group-->
        <div class="form-floating input-group input-group-solid mb-5">
            <select class="form-select" name="lab_name" id="lab-dropdown"
                aria-label="Floating label select example">
                <option value="" selected>Open this select menu</option>
                @foreach ($lab as $val)
                    <option value="{{ $val->lab_id }}">{{ $val->Lab_name }}
                    </option>
                @endforeach
            </select>
            <label for="floatingSelect">Works with selects</label>
        </div>
        <span class="text-danger">
            @error('madi_type')
                {{ $message }}
            @enderror
        </span>
        <!--end::Input group-->
    </div>
</div>
<div class="col-3" style="margin-left: 8%">
    <div class="form-group row">
        <label for="exampleFormControlInput1" class="required form-label">DISCOUNT(Lab test)</label>
        <div class="input-group input-group-solid mb-5">
            <span class="input-group-text">Rs</span>
            <input type="number" name="Lab_discount" class="form-control"
                aria-label="Amount (to the nearest dollar)"
                value="{{ old('Lab_price') }}" id="Lab_discount" />
            <span class="input-group-text">%</span>
            <span class="text-danger">
                @error('Lab_price')
                    {{ $message }}
                @enderror
            </span>
        </div>
    </div>
</div>
<div class="col-3" style="margin-left: 8%">
    <div class="form-group row">
        <label for="exampleFormControlInput1" class="required form-label">Lab Test Price
        </label>
        <div class="input-group input-group-solid mb-5">
            <span class="input-group-text">Rs</span>
            <input type="number" name="Lab_Price" class="form-control"
                aria-label="Amount (to the nearest dollar)" value=""
                id="lab_prices" />
            <span class="input-group-text">.00</span>
            <span class="text-danger">
                @error('Lab_price')
                    {{ $message }}
                @enderror
            </span>
        </div>
    </div>
</div> --}}
