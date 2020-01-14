@extends('layouts.app')

@section('content')


    <div id="app">
        <h1>Hello App!</h1>
        <p>
            <!-- use router-link component for navigation. -->
            <!-- specify the link by passing the `to` prop. -->
            <!-- `<router-link>` will be rendered as an `<a>` tag by default -->
            <router-link to="/dashboard">Go to Foo</router-link>
            <example-component></example-component>
            <router-link to="/profile">Go to Bar</router-link>
        </p>
        <!-- route outlet -->
        <!-- component matched by the route will render here -->
        <router-view></router-view>
    </div>
@endsection
