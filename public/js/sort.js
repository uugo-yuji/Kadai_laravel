function sortChange() {
  let obj = document.getElementById('sort');
  let index = obj.selectedIndex;
  let value = sort.options[index].value;

  $.ajax({
    type:"GET",
    url:"ajax",
    data:{"value":value},
    dataType:"json"
  }).done(function(res){
    let data = res.data
    let body = document.getElementById('table-body');


    //非同期通信に成功したときに行いたい処理
      $(".example").html("");
      var html = `
      <div id="example">
        <table class="table">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">タイトル</th>
              <th scope="col">作成日時</th>
              <th scope="col">詳細</th>
            </tr>
          </thead>
          <tbody id="table-body">
`;



$.each(data, function(index, el){
  console.log('渡ってきた値の要素')
  console.log(el);
  html2 = `
    <tr>
      <th scope="row"></th>
      <td>${ el.title }</td>
      <td>${ el.created_at }</td>
      <td><a href="">詳細をみる</a></td>
    </tr>
  </tbody>
</table>
</div>
`;
$(".example").append(html + html2);
});

    // html = html + html2;
    // html = html + html3;

      // $(".example").append(html);

  }).fail(function(){
    //失敗した時の処理
    alert('非同期に失敗しました');
  });
}