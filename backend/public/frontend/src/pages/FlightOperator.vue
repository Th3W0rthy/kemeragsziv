<template>
    <div class="w-75 nt-5 m-auto p-5 bg-succes bg-opacity-25">
        <VFrom @submit="onSubmit" id="vfrom" :validation-schema="schema">
            <div class="form-group">
                <label for="departure">Departure</label>
                <Field type="text" name="departure" id="departure" class="form-control" rules="required"/> 
                <ErrorMessage name="departure" as="div" class="alert alert-danger m-1"/>
            </div>
            <div class="form-group">
                <label for="arrival">Arrival</label>
                <Field type="text" name="arrival" id="arrival" class="form-control" rules="required"/> 
                <ErrorMessage name="arrival" as="div" class="alert alert-danger m-1"/>
            </div>
            <div class="form-group">
                <label for="from">From</label>
                <Field type="text" name="from" id="from" class="form-control" rules="required"/> 
                <ErrorMessage name="from" as="div" class="alert alert-danger m-1"/>
            </div>
            <div class="form-group">
                <label for="to">To</label>
                <Field type="text" name="to" id="to" class="form-control" rules="required"/> 
                <ErrorMessage name="to" as="div" class="alert alert-danger m-1"/>
            </div>
            <div class="form-group">
                <label for="airline">Airline</label>
                <Field type="text" name="airline" id="airline" class="form-control" rules="required"/> 
                <ErrorMessage name="airline" as="div" class="alert alert-danger m-1"/>
            </div>
            <div class="form-group">
                <label for="flight_number">Flight Number</label>
                <Field type="text" name="flight_number" id="flight_number" class="form-control" rules="required"/> 
                <ErrorMessage name="flight_number" as="div" class="alert alert-danger m-1"/>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Add Flight</button>
        </VFrom>
  </div>
</template>
<script setup >
import * as yup from 'yup';
import {Form as VFrom, Field, ErrorMessage} from  "vee-validate";

const schema = yup.object({
    departure: yup.required(),
    arrival: yup.required(),
    from: yup.required(),
    to: yup.required(),
    airline: yup.required(),
    flight_number: yup.required(),
});
</script>