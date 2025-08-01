

import 'package:dart_api/dart_api.dart' ;
import 'package:dio/dio.dart';
import 'dart:io';

void main(List<String> arguments) async {
  Object ob = Object();
  print(ob);

  Dio dio = Dio();
  Response response =
      await dio.get('http://682b3419d29df7a95be27be0.mockapi.io/products/1');
  print(response);
// print(response.data);

   User user = User.fromMap (response.data);
  print(user);



}
