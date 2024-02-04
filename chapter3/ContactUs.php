<?
class ContactUs {
  public function validate() {
     // Здесь будет проверка всех данных, что они корректны
     // Например, если пользователь должен указать свой e-mail,
     // то стоит проверить, что у e-mail корректный формат
     return true;
  }

  public function SendMessage() {
     if ($this->validate()) {
        // здесь будет отправка сообщения
     }
  }
}
