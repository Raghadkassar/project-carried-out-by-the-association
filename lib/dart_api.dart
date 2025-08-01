class User {
  String createdAt;
  String name;
  String? avatar;
  int  id;

  User({
    required this.createdAt,
    required this.name,
    required this.avatar,
    required this.id,
  });
    static fromMap(Map<String,dynamic> map){
    return User (createdAt: map['createdAt'],  name: map['name'],avatar: map['avatare'], id: map['id']);
  }

   @override
  String toString() {
return "His createdAtis : ${createdAt}";
    return "name: ${name} , avatar : ${avatar}  id: ${id}";
  }
}
