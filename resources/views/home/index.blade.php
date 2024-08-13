@extends('home.layout')

@section('title', 'Post Home page')

@section('main')

<?php if (count($list)): ?>
      <?php foreach ($list as $key => $value): ?>
      <div class="card">
        <div class="card-header">
          {{$value->title}}
        </div>
        <div class="card-body">
          <p class="card-text">{{$value->text}}</p>
        </div>
      </div>
      <?php endforeach ?>
    </tbody>
  </table>
<?php else: ?>
  <h3>No Post are added</h3>
<?php endif ?>


@endsection