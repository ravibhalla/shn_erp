<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
.container-fluid{
  
padding:50px;
}

</style>
</head>
<body>
<div class="container-fluid">
    <center><h4>Test Report</h4></center>
    <table class="table table-bordered" >
        <th colspan="4" style="text-align:center">
            Report ID: {{ $testing_data[0]->test_gen_id }}
        </th>
        <tr>
            <td>Issued To</td>
            <td>{{ $testing_data[0]->client_name }}, {{ $testing_data[0]->client_address }}</td>
            <td>Sample Booking / Receipt Date</td>
            <td>{{ $testing_data[0]->booking_date }}</td>
        </tr>
        <tr>
            <td>
                Letter Ref No.
                <br>
                Date
            </td>
            <td>
            {{ $testing_data[0]->letter_ref_no }}
            <br>
            {{ $testing_data[0]->letter_date }}
            </td>
            <td>Date of Issue</td>
            <td>{{ date('Y-m-d') }}</td>
        </tr>
        <tr>
            <td>
                Client Name
            </td>
            <td colspan="3">
            {{ $testing_data[0]->client_name }}
            </td>
        </tr>
        <tr>
            <td>
                Kind Attention <br>
                Email
            </td>
            <td colspan="3">
            @if($testing_data[0]->description =='')         
                -------
            @else
                {{ $testing_data[0]->description }}       
            @endif
      
            <br>
            {{ $testing_data[0]->email }}
            </td>
        </tr>
        <tr>
            <td>Sample Description</td>
            <td colspan="3">{{ $testing_data[0]->product_name }}</td>
        </tr>

    </table>

    <!-- <div class="row justify-content-center">
        <div class='col-lg-12 col-md-12'>
        <div class='row'>
        <div class='col-lg-2 col-md-2'>
            {{ $testing_data[0]->client_name }}
            <br>
            <br>
            {{ $testing_data[0]->client_address }}
        </div>
        <div class='col-lg-3 col-md-2'>

        </div>
        <div class='col-lg-2 col-md-2'>
        Sample Description: <br>
        {{ $testing_data[0]->product_name }}
        <br>
        <br>
        Your Ref. No.:
        {{ $testing_data[0]->letter_ref_no }}
          
    </div>
    <div class='col-lg-2 col-md-2'>

    </div>
    <div class='col-lg-2 col-md-2'>
        <span style='float:right;vertical-align:top'>
          Date:
          <br>
          DOR:{{ $testing_data[0]->booking_date }}
        </span>
    </div>
    </div>
        <br>
        <br>
            <span>
                ID- {{ $testing_data[0]->test_gen_id }}
            </span>
            <span style='float:right'>
                Date of start of testing:{{ $testing_data[0]->booking_date }}
            </span>
         <table class='table table-bordered '>
            <thead>
                <tr>
                    <th>Sl.No</th>
                    <th>Test Parameter</th>
                    <th>Observed Value</th>
                    <th>Test Method</th>
                </tr>
                <input type='hidden' value='{{ $i=1 }}' />
                @foreach($testing_data as $data)
                <tr>
                    <td style='vertical-align:top'> {{ $i }} </td>
                    <td> 
                            {{ $data->param_name }}
                            <input type='hidden' value='{{ $j=1 }}' />
                            <br>
                          <div class='param_sub'> 
                            @if(count($data->test_param_data) > 1 )
                                @foreach($data->test_param_data as $param)                    
                                    <span>{{ $j }} : </span>
                                    <span> {{ $param->test_sub_param }} </span>
                                    <br>
                                    <input type='hidden' value='{{ $j++ }}' />
                                @endforeach 
                            @endif
                            </div>
                    </td>
                    <td> 
                    <input type='hidden' value='{{ $j=1 }}' />

                    @foreach($data->test_param_data as $param)        
                    
                        <span> {{ $param->test_obv_value }} </span>
                        <br>
                        <input type='hidden' value='{{ $j++ }}' />
                    @endforeach 
        
                </td>
                    <td style='vertical-align:top'> {{ $data->test_method }} </td>
                </tr>
                <input type='hidden' value='{{ $i++ }}' />
                @endforeach
            </thead>
        </table> 
        
        
        </div>


    </div> -->
</div>
</body>
</html>