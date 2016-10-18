<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2> >> 회원가입 </h2>
    <form action="17_example7-3.php" name="mem_form" method="post">
    <input type="hidden" name="title" value="회원가입 양식">
    <table border="1" width="640" cellspacing="1" cellpadding="4">
      <tr>
        <td allign="right">* 아이디</td>
        <td><input type="text" size="15" maxlength="12" name="id" value="guest"></td>
      </tr>
      <tr>
        <td allign="right">* 이름</td>
        <td><input type="text" size="15" maxlength="12" name="name"></td>
      </tr>
      <tr>
        <td allign="right">* 비밀번호</td>
        <td><input type="password" size="15" maxlength="12" name="passwd" value="1234"></td>
      </tr>
      <tr>
          <td allign="right">* 비밀번호 확인</td>
          <td><input type="password" size="15" maxlength="12" name="passwd_confirm" value="1234"></td>
      </tr>
      <tr>
        <td allign="right">* 성별</td>
        <td>
          <input type="radio" name="gender" value="M" checked> MALE
          <input type="radio" name="gender" value="F"> FEMALE
        </td>
      </tr>
      <tr>
        <td allign="right">* 전화번호</td>
        <td>
          <select name="phone1" id="">
            <option>선택</option>
            <option value="010">010</option>
            <option value="011">011</option>
            <option value="017">017</option>
          </select> -
          <input type="text" size="4" name="phone2" maxlength="4"> -
          <input type="text" size="4" name="phone3" maxlength="4">
        </td>
      </tr>
      <tr>
        <td allign="right">* 주소</td>
        <td><input type="text" size="50" name="address"></td>
      </tr>
      <tr>
        <td allign="right">* 취미</td>
        <td>
          <input type="checkbox" name="movie" value="yes" checked> 영화감상 &nbsp;
          <input type="checkbox" name="book" value="yes">독서 &nbsp;
          <input type="checkbox" name="shop" value="yes">쇼핑 &nbsp;
          <input type="checkbox" name="sport" value="yes">운동
        </td>
      </tr>
      <tr>
        <td allign="right">* 자기소개</td>
        <td><textarea name="intro" id="" cols="60" rows="10" row="5"></textarea></td>
      </tr>
    </table>
    <br>
    <table border="0" width="640">
      <tr>
        <td>
          <input type="submit" value="확인">
          <input type="reset" value="다시작성">
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>
