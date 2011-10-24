<?php
/*-------------------------------------------------------
*
*   LiveStreet Engine Social Networking
*   Copyright © 2008 Mzhelskiy Maxim
*
*--------------------------------------------------------
*
*   Official site: www.livestreet.ru
*   Contact e-mail: rus.engine@gmail.com
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*/

/**
 * Польский языковой файл. / Polski plik językowy 
 * Содержит все текстовки движка.
 */
return array(
	/**
	 * Блоги
	 */
	'blogs' => 'Projekty',
	'blogs_title' => 'Tytuł oraz właściciel',
	'blogs_readers' => 'Śledzący',
	'blogs_rating' => 'Ranking',
	'blogs_owner' => 'Właściciel',
	'blogs_personal_title' => 'Блог им.',
	'blogs_personal_description' => 'Это ваш персональный блог.',
	
	'blog_no_topic' => 'Tutaj jeszcze nikt nic nie napisał.',
	'blog_rss' => 'RSS',
	'blog_rating' => 'Ranking',
	'blog_vote_count' => 'głosów',
	'blog_about' => 'O projekcie',
	/**
	 * Популярные блоги
	 */
	'blog_popular' => 'Popularne projekty',
	'blog_popular_rating' => 'Ranking',
	'blog_popular_all' => 'wszystkie projekty',
	/**
	 * Пользователи блога
	 */
	'blog_user_count' => 'uczęstników',
	'blog_user_administrators' => 'Właścicieli',
	'blog_user_moderators' => 'Moderatorzy',
	'blog_user_moderators_empty' => 'Nie ma moderatorów',
	'blog_user_readers' => 'Uczęstnik',	
	'blog_user_readers_empty' => 'Nie ma uczęstników',	
	/**
	 * Голосование за блог
	 */
	'blog_vote_up' => 'podoba się',
	'blog_vote_down' => 'nie podoba się',
	'blog_vote_count_text' => 'zagłosowało:',
	'blog_vote_error_already' => 'Już głosowałeś za teb projekt!',
	'blog_vote_error_self' => 'Nie możesz głosować za własny projekt!',
	'blog_vote_error_acl' => 'Nie wystarczający ranking oraz moc żeby głosować!',
	'blog_vote_error_close' => 'Nie można głosować za zamknięty projekt',
	'blog_vote_ok' => 'Twój głos został przyjęty!',
	/**
	 * Вступление и выход из блога
	 */
	'blog_join_leave' => 'uczestniczyć lub nie w projekcie',	
	'blog_join' => 'uczestniczyć w projekcie',	
	'blog_join_ok' => 'Teraz jesteś uczestnikiem tego projektu!',	
	'blog_join_error_invite' => 'Potrebujesz zaproszenia, żeby uczęstniczyć w projekcie!',	
	'blog_join_error_self' => 'Jesteś właścicielem projektu!',	
	'blog_leave' => 'nie chcę więcej uczestniczyć',	
	'blog_leave_ok' => 'Nie jesteś uczestnikiem projektu!',	
	/**
	 * Меню блогов
	 */
	'blog_menu_all' => 'Wszystkie',
	'blog_menu_all_good' => 'Dobre',
	'blog_menu_all_new' => 'Nowe',
	'blog_menu_all_list' => 'Wszystkie projekty',
	'blog_menu_collective' => 'Grupowe',
	'blog_menu_collective_good' => 'Dobre',
	'blog_menu_collective_new' => 'Nowe',
	'blog_menu_collective_bad' => 'Kiepskie',
	'blog_menu_personal' => 'Personalne',
	'blog_menu_personal_good' => 'Dobre',
	'blog_menu_personal_new' => 'Nowe',
	'blog_menu_personal_bad' => 'Kiepskie',
	'blog_menu_top' => 'TOP',
	'blog_menu_top_blog' => 'Projekty',
	'blog_menu_top_topic' => 'Sugestie',
	'blog_menu_top_comment' => 'Komentarzy',
	'blog_menu_top_period_24h' => 'W ciągu 24 godzin',
	'blog_menu_top_period_7d' => 'W ciągu 7 dni',
	'blog_menu_top_period_30d' => 'W ciągu 30 dni',
	'blog_menu_top_period_all' => 'Cały czas',	
	'blog_menu_create' => 'Utworzyć projekt',
	/**
	 * Создание/редактирование блога
	 */
	'blog_edit' => 'Ustawienia',
	'blog_delete' => 'Usunąć',
	'blog_create' => 'Tworzenie nowego projektu',
	'blog_create_acl' => 'Nie masz jeszcze wystarczającej mocy, aby stworzyć swój własny projekt',
	'blog_create_title' => 'Nazwa projektu',
	'blog_create_title_notice' => 'Nazwa ma być taka, żeby kojażyła się ze stroną internetową dla której jest on tworzony.',
	'blog_create_title_error' => 'Nazwa musi zawierać od 2 do 200 symboli!',
	'blog_create_title_error_unique' => 'Projekt z taką nazwą już istnieje!',
	'blog_create_url' => 'URL projektu',
	'blog_create_url_notice' => 'Adres URL Projektu, za pomocą którego będzie on dostępny. Może zawierać tylko litery, cyfry, myślniki, spacje zostaną zastąpione przez "_". URL musi odpowiadać nazwie tego projektu, po utworzeniu projektu edycja tego pola będzie nie dostępna',
	'blog_create_url_error' => 'URL projektu powinnien zawierać od 2 do 50 znaków, tylko w alfabecie łacińskim + numery oraz "-" "_"',
	'blog_create_url_error_badword' => 'URL projektu musi różnić sie od:',
	'blog_create_url_error_unique' => 'Projekt z podanym URL już istnieje',
	'blog_create_description' => 'Opis',
	'blog_create_description_notice' => '',
	'blog_create_description_error' => 'Opis projektu może zawierać od 3 do 3000 znaków',
	'blog_create_type' => 'Rodzaj projektu',
	'blog_create_type_open' => 'Otwarty',
	'blog_create_type_close' => 'Zamknięty',
	'blog_create_type_open_notice' => 'Otwarty - każdy użytkownik może uczęstniczyć w tym projekcie, sugestie będą widoczne dla wszystkich',
	'blog_create_type_close_notice' => 'Zanknięty - dołączyć się do projęktu można tylko przez zaproszenie administratora, sugestie mogą zobaczyć tylko czytelnicy',
	'blog_create_type_error' => 'Nieokreślony rodzaj projektu',
	'blog_create_rating' => 'Ograniczenia według rankingu',
	'blog_create_rating_notice' => 'Рейтинг, который необходим пользователю, чтобы написать в этот блог',
	'blog_create_rating_error' => 'Значение ограничения рейтинга должно быть числом',
	'blog_create_avatar' => 'Awatar',
	'blog_create_avatar_error' => 'Nie udało się załadować plik awataru',
	'blog_create_avatar_delete' => 'usunąć',
	'blog_create_submit' => 'Zapisz',
	'blog_create_submit_notice' => 'Po kliknięciu przecisku "Zapisz", projekt będzie utworzony',
	/**
	 * Управление блогом
	 */
	'blog_admin' => 'Sterowanie projektem',
	'blog_admin_not_authorization' => 'Żeby zmieniać ustawienia projektu, musisz się zalogować używając własne konto.',
	'blog_admin_profile' => 'Profil',
	'blog_admin_users' => 'Użytkownicy',
	'blog_admin_users_administrator' => 'administrator',
	'blog_admin_users_moderator' => 'moderator',
	'blog_admin_users_reader' => 'czytelnik',
	'blog_admin_users_bun' => 'zablokowany',
	'blog_admin_users_current_administrator' => 'To ty jesteś &mdash; właściwy administrator!',
	'blog_admin_users_empty' => 'nikt nie uczęstniczy w tym projekcie',
	'blog_admin_users_submit' => 'Zapisz',
	'blog_admin_users_submit_notice' => 'Po kliknięciu przecisku "Zapisz", uprawnienia czytelników zostaną zapisane',
	'blog_admin_users_submit_ok' => 'Uprawnienia są zapisane',
	'blog_admin_users_submit_error' => 'Coś jest źle!',
	
	'blog_admin_delete_confirm' => 'Naprawdę chcesz usunąc projekt?',
	'blog_admin_delete_move' => 'Przenieść projekt do:',
	'blog_delete_clear' => 'Skasować sugestie',
	'blog_admin_delete_success' => 'Projekt został usunięty',
	'blog_admin_delete_not_empty' => 'Nie można usunąć projekt który zawiera wpisy. Najpierw usuń wszystkie sugestie!',
	'blog_admin_delete_move_error' => 'Nie udało się przenieść wpisy z projektu',
	'blog_admin_delete_move_personal' => 'Nie można przenieść wpisy do prywatnego projektu',
	
	'blog_admin_user_add_label' => 'Zaprosić użytkowników:',
	'blog_admin_user_invited' => 'Lista zaproszonych:',
	'blog_close_show' => 'To jest zamknięty projekt, nie posiadasz uprawnień do oglądania treści',
	'blog_user_invite_add_self' => 'Nie możesz zaprosić sam siebie',
	'blog_user_invite_add_ok' => 'Użytkownikowi %%login%% zostało wysłane zaproszenie',
	'blog_user_already_invited' => 'Użytkownikowi %%login%% już sostało wysłane zaproszenie!',
	'blog_user_already_exists' => 'Użytkownik %%login%% już uczęstniczy w projekcie',
	'blog_user_already_reject' => 'Użytkownik %%login%% odrzucił zaproszenie',
	'blog_user_invite_title' => "Zaproszenie uczęstniczyć w projekcie '%%blog_title%%'",
	'blog_user_invite_text' => "Użytkownik %%login%% zaprasza uczęstniczyć w zamkniętym projekcie '%%blog_title%%'.<br/><br/><a href='%%accept_path%%'>Zaakceptować</a> - <a href='%%reject_path%%'>Odrzucić</a>",
	'blog_user_invite_already_done' => 'Już uczęstniczysz w tym projekcie!',
	'blog_user_invite_accept' => 'Zaproszenie zostało zaakceptowane',
	'blog_user_invite_reject' => 'Zaproszenie zostało odrzucone',
	'blog_user_invite_readd' => 'jeszcze raz',
	
	/**
	 * Топики
	 */
	'topic_title' => 'Sugestie',
	'topic_read_more' => 'Czytać więcej',
	'topic_date' => 'data',
	'topic_user' => 'tekst autora',
	'topic_time_limit' => 'Nie możesz tworzyć sugestie tak szybko',
	'topic_comment_read' => 'czytać komentarzy',
	'topic_comment_add' => 'dodać komentarz',
	'topic_comment_add_title' => 'napisać komentarz',
	'topic_comment_add_text_error' => 'Tekst komentarza powinnien zawierać od 2 do 3000 znaków i nie może zawierać html',
	'topic_comment_acl' => '',
	'topic_comment_limit' => 'Nie możesz dodawać komentarzy tak szybko!',
	'topic_comment_notallow' => 'Właściciel projektu nie pozwolił dodawać komentarzy',
	'topic_comment_spam' => 'Nie spamuj!',
	'topic_unpublish' => 'wpis znajduje się brudnopisie',
	'topic_favourite_add' => 'dodaj do ulubionych',
	'topic_favourite_add_ok' => 'Sugestia została dodana do ulubionych',
	'topic_favourite_add_no' => 'Sugestii nie ma w ulubionych',
	'topic_favourite_add_already' => 'Ta sugestia znajduje się w ulubionych',
	'topic_favourite_del' => 'usunąc z ulubionych',
	'topic_favourite_del_ok' => 'Sugestia została usunięta z ulubionych',
	
	'block_stream_comments_all' => 'Na żywo',
	'block_stream_topics_all' => 'Co nowego...',
	'comments_all' => 'Na żywo',
	/**
	 * Меню топиков
	 */
	'topic_menu_add' => 'Nowe',
	'topic_menu_add_topic' => 'Sugestia',
	'topic_menu_add_question' => 'Pytanie',
	'topic_menu_add_link' => 'Link',
	'topic_menu_saved' => 'Brudnopis',
	'topic_menu_published' => 'Utworzone',
	/**
	 * Создание топика
	 */
	'topic_topic_create' => '',
	'topic_topic_edit' => 'Edycja sugestii',
	'topic_create' => 'napisać',
	'topic_create_blog' => '',
	'topic_create_blog_personal' => 'мой персональный блог',
	'topic_create_blog_error_unknown' => 'Prubujesz dodać wpis do nieznanego projektu?',
	'topic_create_blog_error_nojoin' => 'Nie uczestniczysz w tym projekcie!',
	'topic_create_blog_error_noacl' => 'Nie masz wystarczająco mozy, żeby dodawać sugestie',
	'topic_create_blog_error_noallow' => 'Nie możesz dodać sugestii',
	'topic_create_title' => 'Tytuł',
	'topic_create_title_notice' => 'Tytuł musi krótko definiować sens sugestii',
	'topic_create_title_error' => 'Tytuł musi zawierać od 2 do 200 znaków',
	'topic_create_text' => 'Treść',
	'topic_create_text_notice' => 'Jest dostępny html',
	'topic_create_text_error' => 'Opis powinien zawierać od 2 do 15000 znaków',
	'topic_create_text_error_unique' => 'Już dodawałeś sugestię z takim opisem',
	'topic_create_tags' => 'Tagi',
	'topic_create_tags_notice' => 'Метки нужно разделять запятой. Например: клон хабры, блоги, рейтинг, google, сиськи, кирпич.',
	'topic_create_tags_error_bad' => 'Проверьте правильность меток',
	'topic_create_tags_error' => 'Метки топика должны быть от 2 до 50 символов с общей длиной не более 500 символов',
	'topic_create_forbid_comment' => 'запретить комментировать',
	'topic_create_forbid_comment_notice' => 'Если отметить эту галку, то нельзя будет оставлять комментарии к топику',
	'topic_create_publish_index' => 'принудительно вывести на главную',
	'topic_create_publish_index_notice' => 'Если отметить эту галку, то топик сразу попадёт на главную страницу (опция доступна только администраторам)',
	'topic_create_submit_publish' => 'zapisz',
	'topic_create_submit_save' => 'сохранить в черновиках',
	'topic_create_submit_preview' => 'предпросмотр',
	'topic_create_submit_notice' => 'Если нажать кнопку «Сохранить в черновиках», текст топика будет виден только Вам, а рядом с его заголовком будет отображаться замочек. Чтобы топик был виден всем, нажмите «Опубликовать».',
	'topic_create_notice' => 'Za pomocą tagu <cut> można ukryć tekst. Nie będize on widoczny w projekcie, ale można będzie go zobaczyć w szczegółach sugestii.',
	'topic_create_error' => 'Problemy techniczne przy dodawaniu sugestii. Spróbuj ponownie później.',
	
	'topic_edit' => 'Ustawienia',
	'topic_delete' => 'Usunąć',
	'topic_delete_confirm' => 'Naprawdę chcesz usunąc sugestię?',
	/**
	 * Топик-ссылка
	 */
	'topic_link' => 'топик-ссылка',
	'topic_link_title' => 'Ссылки',
	'topic_link_title_edit' => 'Редактирование ссылки',
	'topic_link_title_create' => 'Добавление ссылки',
	'topic_link_create' => 'Создание топика-ссылки',
	'topic_link_edit' => 'Редактирование топика-ссылки',
	'topic_link_count_jump' => 'переходов по ссылке:',
	'topic_link_create_url' => 'Ссылка',
	'topic_link_create_url_notice' => 'Например, http://livestreet.ru/blog/dev_livestreet/113.html',
	'topic_link_create_url_error' => 'Ссылка должна быть от 2 до 200 символов',
	'topic_link_create_text' => 'Краткое описание (максимум 500 символов, HTML-теги запрещены)',
	'topic_link_create_text_notice' => 'HTML-теги запрещены',
	'topic_link_create_text_error' => 'Описание ссылки должно быть от 10 до 500 символов',
	/**
	 * Топик-опрос
	 */
	'topic_question_title' => 'Опросы',
	'topic_question_title_edit' => 'Редактирование опроса',
	'topic_question_title_create' => 'Добавление опроса',
	'topic_question_vote' => 'голосовать',
	'topic_question_vote_ok' => 'Ваш голос учтен.',
	'topic_question_vote_already' => 'Ваш голос уже учтен!',
	'topic_question_vote_result' => 'Проголосовало',
	'topic_question_abstain' => 'воздержаться',
	'topic_question_abstain_result' => 'Воздержалось',
	'topic_question_create' => 'Создание топика-опроса',
	'topic_question_edit' => 'Редактирование топика-опроса',
	'topic_question_create_title' => 'Вопрос',
	'topic_question_create_title_notice' => 'Вопрос должен быть наполнен смыслом, чтобы можно было понять, о чем будет опрос.',
	'topic_question_create_title_error' => 'Вопрос должен быть от 2 до 200 символов',
	'topic_question_create_answers' => 'Варианты ответов',	
	'topic_question_create_answers_error' => 'Ответ должен быть от 1 до 100 символов',	
	'topic_question_create_answers_error_min' => 'Вариантов ответа должно быть как минимум два',	
	'topic_question_create_answers_error_max' => 'Максимально возможное число вариантов ответа 20',	
	'topic_question_create_text' => 'Краткое описание (максимум 500 символов, HTML-теги запрещены)',
	'topic_question_create_text_notice' => 'HTML-теги запрещены',
	'topic_question_create_text_error' => 'Описание опроса должно быть не более 500 символов',
	/**
	 * Голосование за топик
	 */
	'topic_vote_up' => 'podoba się',
	'topic_vote_down' => 'nie podoba się',	
	'topic_vote_error_already' => 'Już głosowałeś!',
	'topic_vote_error_self' => 'Nie możesz głosować własnej sugestii!',
	'topic_vote_error_guest' => 'musisz załogować się',
	'topic_vote_error_time' => 'Tarmin głosowanie na sugestie wygas!',
	'topic_vote_error_acl' => 'У вас не хватает рейтинга и силы для голосования!',
	'topic_vote_no' => 'jeszcze nikt nie zagłosował',
	'topic_vote_ok' => 'Głos został przyjęty',
	'topic_vote_ok_abstain' => 'Powstrzymałeś się, aby zobaczyć oceny sugestii',
	'topic_vote_count' => 'zagłosowało',
	
	/**
	 * Комментарии
	 */
	'comment_title' => 'Komentarz',
	'comment_collapse' => 'zwij',
	'comment_expand' => 'rozwij',
	'comment_goto_parent' => 'Odpowiedź na',
	'comment_goto_child' => 'Powrót do odpowiedzi',
	'comment_bad_open' => 'otwórz komentarz',
	'comment_answer' => 'Odpowiedzieć',
	'comment_delete' => 'Usunąć',
	'comment_delete_ok' => 'Komentarz został usunięty',
	'comment_repair' => 'Przywrócić',
	'comment_repair_ok' => 'Komentarz został przywrócony',
	'comment_was_delete' => 'komentarz został usunięty',
	'comment_add' => 'dodać',
	'comment_preview' => 'podgląd',
	'comment_unregistered' => 'Только зарегистрированные и авторизованные пользователи могут оставлять комментарии.',
	/**
	 * Голосование за комментарий
	 */
	'comment_vote_error' => 'Spróbuj zagłosować później',
	'comment_vote_error_value' => 'Głosować można tylko +1 czy -1!',
	'comment_vote_error_acl' => 'Brakuje ci mocy żeby zagłosować!',
	'comment_vote_error_already' => 'Już głosowałeś na ten komentarz!',
	'comment_vote_error_time' => 'Termin głosowanie na komentarz wygas!',
	'comment_vote_error_self' => 'Nie możesz głosować na własny komentarz!',
	'comment_vote_error_noexists' => 'Komentarz na który głosujesz nie istnieje!',
	'comment_vote_ok' => 'Twój głos został przyjęty',

	'comment_favourite_add' => 'dodać do ulubieonych',
	'comment_favourite_add_ok' => 'Komentarz został dodany do ulubionyc',
	'comment_favourite_add_no' => 'Komentarza nie ma w ulubionych',
	'comment_favourite_add_already' => 'Ten komentarz już jest w ulubionych',
	'comment_favourite_del' => 'usunąć z ulubionych',
	'comment_favourite_del_ok' => 'Komentarz został usunięty z ulubionych',

	
	/**
	 * Люди
	 */
	'people' => 'Użytkownicy',
	
	
	/**
	 * Пользователь
	 */
	'user' => 'Urzytkownik',
	'user_list' => 'Użytkownicy',
	'user_list_new' => 'Nowe użytkownicy',
	'user_list_online_last' => 'Ostatnio odzwiedzali',
	'user_good' => 'Pozytywni',
	'user_bad' => 'Negatywni',
	'user_privat_messages' => 'Prywatnie wiadomości',
	'user_privat_messages_new' => 'Masz nowe wiadomości',
	'user_settings' => 'Ustawienia',
	'user_settings_profile' => 'konta',
	'user_settings_tuning' => 'strony',
	'user_login' => 'Login albo adres e-mail',
	'user_login_submit' => 'Zaloguj się',
	'user_login_remember' => 'Zapamiętaj mnie',
	'user_login_bad' => 'Nie prawidłowy login czt hasło!',
	'user_password' => 'Hasło',
	'user_password_reminder' => 'Przypomij hasło',
	'user_exit_notice' => 'Zapraszamy ponownie!',
	'user_authorization' => 'Zaloguj się',
	'user_registration' => 'Zarejestruj się',
	'user_write_prvmsg' => 'Nowy list',

	'user_friend_add' => 'Dodać do przyjaciół',
	'user_friend_add_ok' => 'Masz nowego przyjaciela',
	'user_friend_add_self' => 'Twój przyjaciel - to Ty!',
	'user_friend_del' => 'Usunąc z listy przyjacielej',
	'user_friend_del_ok' => 'Już nie jest twoim przyjecielem',
	'user_friend_del_no' => 'Nie znaleziono przyjaciela!',
	'user_friend_offer_reject' => 'Prośba została odrzucona',
	'user_friend_offer_send' => 'Prośba zostałą wysłana',	
	'user_friend_already_exist' => 'Użytkownik już jest twoim przyjacielem',
	'user_friend_offer_title' => 'Użytkownik %%login%% chcę być twoim przyjacielem',
	'user_friend_offer_text' => "Użytkownik %%login%% chcę dodać ciebie do swojej listu przyjaciół.<br/><br/>%%user_text%%<br/><br/><a href='%%accept_path%%'>Zaakceptować</a> - <a href='%%reject_path%%'>Odrzucić</a>",
	'user_friend_add_deleted' => 'Ten użytkownik nie chcę być twoim przyjacielem',
	'user_friend_add_text_label' => 'Przedstaw się:',
	'user_friend_add_submit' => 'Wyślij',
	'user_friend_add_cansel' => 'Anuluj',
	'user_friend_offer_not_found' => 'Prośba nie istnieje',
	'user_friend_offer_already_done' => 'Prośba jest rozpatrzona',
	'user_friend_accept_notice_title' => 'Twoja prośba została zaakceptowana',
	'user_friend_accept_notice_text' => 'Użytkownik %%login%% zgodził się być twoim przyjacielem',
	'user_friend_reject_notice_title' => 'Twoja prośba została odrzucona',
	'user_friend_reject_notice_text' => 'Użytkownik %%login%% nie chcę być twoim przyjacielem',	
	'user_friend_del_notice_title' => 'Zostałeś usunięty z listy przyjacielej',
	'user_friend_del_notice_text' => 'Nie masz więcej przyjaciela %%login%%',
	
	'user_rating' => 'Ranking',
	'user_skill' => 'Moc',
	'user_date_last' => 'Ostatnia wizyta',
	'user_date_registration' => 'Data rejestracji',
	'user_empty' => 'nie ma',
	'user_stats' => 'Statystyka',
	'user_stats_all' => 'Wszystkich użytkowników',
	'user_stats_active' => 'Aktywni',
	'user_stats_noactive' => 'Nie zarejestrowani',
	'user_stats_sex_man' => 'Mężczyzni',
	'user_stats_sex_woman' => 'Kobiety',
	'user_stats_sex_other' => 'Płeć nie podana',
	
	'user_not_found' => 'Nie znaleziona użytkowika <b>%%login%%</b>',
	'user_not_found_by_id' => 'Nie znaleziona użytkowika <b>#%%id%%</b>',
	
	/**
	 * Меню профиля пользователя
	 */
	'people_menu_users' => 'Użytkownicy',
	'people_menu_users_all' => 'Wszystkie',
	'people_menu_users_online' => 'On-line',
	'people_menu_users_new' => 'Nowe',
	
	/**
	 * Регистрация
	 */
	'registration_invite' => 'Rejestracja z zaproszeniem',
	'registration_invite_code' => 'Kod zaproszenia',
	'registration_invite_code_error' => 'Nieprawidłowy kod zaproszenia',
	'registration_invite_check' => 'Sprawdzić kod',
	'registration_activate_ok' => 'Gratulację! Twoje konto jest aktywne!',
	'registration_activate_error_code' => 'Nieprawidłowy kod aktywacji!',
	'registration_activate_error_reactivate' => 'Twoje konto już jest aktywne!',
	'registration_confirm_header' => 'Aktywacja konta',
	'registration_confirm_text' => 'Вы почти зарегистрировались, осталось только активировать аккаунт. Инструкции по активации отправлены по электронной почте на адрес, указанный при регистрации.',
	'registration' => 'Rejestracja',
	'registration_is_authorization' => 'Już jesteś zarejestrowany, a nawet zalogowany!',
	'registration_login' => 'Login',
	'registration_login_error' => 'Nieprawidłowy login, musi zawierać od 3 do 30 znaków',
	'registration_login_error_used' => 'Ten login jest zajęty',
	'registration_login_notice' => 'Może zawierać tylko litery (a-z A-Z), cyfry (0-9). podkreślenia (_) lepiej nie używać. Długość nazwy użytkownika nie może być mniejsza niż 3 i więcej niż 30 znaków.',
	'registration_mail' => 'E-mail',
	'registration_mail_error' => 'Nieprawidłowy e-mail',
	'registration_mail_error_used' => 'Ten e-mail już jest wykorzystany',
	'registration_mail_notice' => 'W celu biezpieczeństwe prosimy podać adres e-mail.',
	'registration_password' => 'Hasło',
	'registration_password_error' => 'Nieprawidłowe hasło, musi zawierać co najmniej 5 znaków',
	'registration_password_notice' => 'Musi zawierać co najmniej 5 znaków i nie może być takim jak login. Nie używaj prostych haseł, bądź rosądny.',
	'registration_password_error_different' => 'Hasła nie zgadzają się',
	'registration_password_retry' => 'Powtórz hasło',
	'registration_captcha' => 'Wprowadź litery oraz cyfry',
	'registration_captcha_error' => 'Nieprawidłowy kod',
	'registration_submit' => 'Zarejestruj się',
	'registration_ok' => 'Gratulację! Rejestracja zakończona!',
			
	/**
	 * Голосование за пользователя
	 */
	'user_vote_up' => 'podoba się',
	'user_vote_down' => 'nie bodoba się',	
	'user_vote_error_already' => 'Już głosowałeś za tego użytkownika!',
	'user_vote_error_self' => 'Nie możesz głosować zza siebie!',
	'user_vote_error_guest' => 'żeby głosować musisz być zalogowany',	
	'user_vote_error_acl' => 'Brakuja ci rankingu żeby głsosować!',	
	'user_vote_ok' => 'Twój głos został przyjęty!',	
	'user_vote_count' => 'głosów',
	
	/**
	 * Меню профиля пользователя
	 */
	'user_menu_profile' => 'Profil',
	'user_menu_profile_whois' => 'Whois',
	
	'user_menu_profile_favourites' => 'Ulubione sugestie',
	'user_menu_profile_favourites_comments' => 'Ulubione komentarzy',
	
	'user_menu_profile_tags' => 'Tagi',
	'user_menu_publication' => 'Sugestie',
	'user_menu_publication_blog' => 'Projekt',
	'user_menu_publication_comment' => 'Komentarzy',
	'user_menu_publication_comment_rss' => 'RSS',
	
	/**
	 * Профиль
	 */
	'profile_privat' => 'Dane osobowe',
	'profile_sex' => 'Płęć',
	'profile_sex_man' => 'mężczyzna',
	'profile_sex_woman' => 'kobieta',
	'profile_birthday' => 'Data urodzenia',
	'profile_place' => 'Adres',
	'profile_about' => 'Coś o siebie',
	'profile_site' => 'Strona www',
	'profile_activity' => 'Aktywność',
	'profile_friends' => 'Przyjaciele',
	'profile_friends_self' => 'Przyjaciele ',
	'profile_invite_from' => 'Zaprosić',
	'profile_invite_to' => 'Zaproszoni',
	'profile_blogs_self' => 'Utworzył',
	'profile_blogs_join' => 'Uczęstniczy w',
	'profile_blogs_moderation' => 'Jest moderatorem',
	'profile_blogs_administration' => 'Jest administratorem',
	'profile_date_registration' => 'Zarejestrowany',
	'profile_date_last' => 'Ozstatnio był',
	'profile_social_contacts' => 'Kontakty',
	
	
	
	/**
	 * Настройки
	 */
	'settings_profile_edit' => 'Zmiena profilu',
	'settings_profile_name' => 'Imię',
	'settings_profile_name_notice' => 'Długość imienia musi być od 2 do 20 znaków.',
	'settings_profile_mail' => 'E-mail',
	'settings_profile_mail_error' => 'Nie prawidłowy E-mail',
	'settings_profile_mail_error_used' => 'E-mail jest zajęty',
	'settings_profile_mail_notice' => 'Twój prawdziwy adres email, na ten adres bedą wysyłane powiadomenia',
	'settings_profile_sex' => 'Płęć',
	'settings_profile_sex_man' => 'mężczyzna',
	'settings_profile_sex_woman' => 'kobieta',
	'settings_profile_sex_other' => 'nie powiem',
	'settings_profile_birthday' => 'Data urodzenia',
	'settings_profile_country' => 'Kraj',
	'settings_profile_city' => 'Miasto',
	'settings_profile_icq' => 'ICQ',
	'settings_profile_site' => 'Strona www',
	'settings_profile_site_url' => 'URL strony',
	'settings_profile_site_name' => 'nazwa strony',
	'settings_profile_about' => 'Coś o siebie',
	'settings_profile_password_current' => 'Obecne hasło',
	'settings_profile_password_current_error' => 'Nie prawidłowe obecne hasło',
	'settings_profile_password_new' => 'Nowe hasło',
	'settings_profile_password_new_error' => 'Nie prawidłowe hasło, musi zaiwerać co najmiej 5 znaków',
	'settings_profile_password_confirm' => 'Powtórz hasło',
	'settings_profile_password_confirm_error' => 'Hasła różnią się',
	'settings_profile_avatar' => 'Awatar',
	'settings_profile_avatar_error' => 'Nie udało się załadować plik awatara',
	'settings_profile_avatar_delete' => 'usunąc',
	'settings_profile_foto' => 'Zdjęcie',
	'settings_profile_foto_error' => 'Nie udało się załadować zdjęcia',
	'settings_profile_foto_delete' => 'usunąć',
	'settings_profile_submit' => 'zapisz profil',
	'settings_profile_submit_ok' => 'Zmiany w profilu zostały zapisane',
	'settings_invite' => 'Zarządzanie zaproszeniami',
	'settings_invite_available' => 'Dostępne',
	'settings_invite_available_no' => 'Nie masz dostępnych zaproszeń',
	'settings_invite_used' => 'Użyłeś',
	'settings_invite_mail' => 'Zaprosić używając e-mail',
	'settings_invite_mail_error' => 'Nie prawidłówy e-mail',
	'settings_invite_mail_notice' => 'На этот e-mail будет выслано приглашение для регистрации',
	'settings_invite_many' => 'много',
	'settings_invite_submit' => 'отправить приглашение',
	'settings_invite_submit_ok' => 'Приглашение отправлено',
	'settings_tuning' => 'Ustawienie powiadomień',
	'settings_tuning_notice' => 'Powiadomenia na skrzynkę e-mail',
	'settings_tuning_notice_new_topic' => 'nowa sugestia w projekcie',
	'settings_tuning_notice_new_comment' => 'nowy komentarz',
	'settings_tuning_notice_new_talk' => 'nowa wiadomość prywatna',
	'settings_tuning_notice_reply_comment' => 'odpowiedź na komentarz',
	'settings_tuning_notice_new_friend' => 'prośba o dodaniu do listy przyjaciół',
	'settings_tuning_submit' => 'zapisz ustawienia',
	'settings_tuning_submit_ok' => 'Ustawienia zapisane',
	
	
	/**
	 * Меню настроек
	 */
	'settings_menu' => 'Ustawienia',
	'settings_menu_profile' => 'Pfofil',
	'settings_menu_tuning' => 'Powiadomienia',
	'settings_menu_invite' => 'Zaproszenia',
	
	/**
	 * Восстановление пароля
	 */
	'password_reminder' => 'Odzyskanie hasła',
	'password_reminder_email' => 'Twoj email',
	'password_reminder_submit' => 'Dostać link do odzyskania hasła',
	'password_reminder_send_password' => 'Nowe hasło zostałe wysłane na twoją skrzynkę e-mail.',
	'password_reminder_send_link' => 'Link do odzyskania hasła został wysłany na twoją skrzynkę e-mail.',
	'password_reminder_bad_code' => 'Nieprawidłowy kod do odzyskania hasła.',
	'password_reminder_bad_email' => 'Nie odnaleziono użytkownika z podanym e-mail',
	
	/**
	 * Панель
	 */
	'panel_b' => 'pobrugiony',
	'panel_i' => 'kursywa',
	'panel_u' => 'podkreślony',
	'panel_s' => 'zakreślony',
	'panel_url' => 'hypełączę',
	'panel_url_promt' => 'URL',
	'panel_code' => 'źródłó',
	'panel_video' => 'wideo',
	'panel_image' => 'obraz',
	'panel_cut' => 'kat',
	'panel_quote' => 'cytat',
	'panel_list' => 'Lista',
	'panel_list_ul' => 'UL LI',
	'panel_list_ol' => 'OL LI',
	'panel_title' => 'Nagłówek',
	'panel_title_h4' => 'H4',
	'panel_title_h5' => 'H5',
	'panel_title_h6' => 'H6',
	
	/**
	 * Блоки
	 */
	'block_city_tags' => 'Miasta',
	'block_country_tags' => 'Kraje',
	'block_blog_info' => 'Оpis projetu',
	'block_blog_info_note' => 'Uwaga',
	'block_blog_info_note_text' => '<strong>Тег &lt;cut&gt; сокращает длинные записи</strong>, скрывая их целиком или частично под ссылкой («читать дальше»). Скрытая часть не видна в блоге, но доступна в полной записи на странице топика.',
	'block_blogs' => 'Projekty',
	'block_blogs_top' => 'Top',
	'block_blogs_join' => 'Podłączone',
	'block_blogs_join_error' => 'Nie uczęstniczyszw grupowych projektach',
	'block_blogs_self' => 'Moje',
	'block_blogs_self_error' => 'Nie masz grupowych projektów',
	'block_blogs_all' => 'Wszystkie projekty',
	'block_stream' => 'Na żywo',
	'block_stream_topics' => 'Opublikowane',
	'block_stream_topics_no' => 'Nie ma sugestii',
	'block_stream_comments' => 'Komentarzy',
	'block_stream_comments_no' => 'Nie ma komentarzy',
	'block_stream_comments_all' => 'Co nowego...',
	
	'block_friends' => 'Przyjaciele',
	'block_friends_check' => 'Zaznaczyć wszystkich',
	'block_friends_uncheck' => 'Odznaczyć',
	'block_friends_empty' => 'Lista przyjacioł jest pusta',
	
	'site_history_back' => 'Wsteć',
	'site_go_main' => 'Na głowną',
	
	/**
	 * Поиск
	 */
	'search' => 'Поиск',
	'search_submit' => 'Найти',
	'search_results' => 'Результаты поиска',
	'search_results_empty' => 'Удивительно, но поиск не дал результатов',
	'search_results_count_topics' => 'топиков',
	'search_results_count_comments' => 'комментариев',
	
	/**
	 * Почта
	 */
	'talk_menu_inbox' => 'Moje wiadomości',
	'talk_menu_inbox_list' => 'Korespondencja',
	'talk_menu_inbox_create' => 'Nowa wiadomość',
	'talk_menu_inbox_favourites' => 'Ulubione',
	'talk_inbox' => 'Moje wiadomośći',
	'talk_inbox_target' => 'Do',
	'talk_inbox_title' => 'Temat',
	'talk_inbox_date' => 'Data',
	'talk_inbox_delete' => 'Usunąć korespondencję',
	'talk_inbox_delete_confirm' => 'Naprawdę chcesz usunąc korespondencję?',
	'talk_comments' => 'Korespondencja',
	'talk_comment_add_text_error' => 'Treść komentarza musi być od 2 do 2000 znaków',
	'talk_create' => 'Nowa wiadomość',
	'talk_create_users' => 'Do',
	'talk_create_users_error' => 'Należy podać do kogo będzie wysłana wiadomość',
	'talk_create_users_error_not_found' => 'Nie ma użytkowników z takim loginem',
	'talk_create_title' => 'Temat',
	'talk_create_title_error' => 'Temat muśi zawierać od 2 do 2000 znaków',
	'talk_create_text' => 'Wiadomość',
	'talk_create_text_error' => 'Treść wiadomości musi zawierać od 2 do 3000 znaków',
	'talk_create_submit' => 'Wysłać',
	'talk_time_limit' => 'Nie możesz wysyłać wiadomoścu tak szybko',
	
	'talk_favourite_inbox' => 'Ulubione wiadomości',
	'talk_favourite_add' => 'dodać do ulubionych',
	'talk_favourite_add_ok' => 'Wiadomość została dodana do ulubionych',
	'talk_favourite_add_no' => 'Wiadomości nie ma w ulubionych',
	'talk_favourite_add_already' => 'Wiadmość już jest w ulubionych',
	'talk_favourite_del' => 'usunąc z ulubionych',
	'talk_favourite_del_ok' => 'Wiadomość została usunięta z ulubionych',	
	
	'talk_filter_title' => 'Filtrować',
	'talk_filter_erase' => 'Zresetuj filtry',
	'talk_filter_erase_form' => 'Wyczyść pola',
	'talk_filter_label_sender' => 'Od',
	'talk_filter_label_keyword' => 'Szukać w temacie',
	'talk_filter_label_date' => 'Według daty',
	'talk_filter_notice_sender' => 'Login nadawcy',
	'talk_filter_notice_keyword' => 'Wprowadź jedno czy kilka słów',
	'talk_filter_notice_date' => 'Data ma być formatu np. 25.12.2010',
	'talk_filter_submit' => 'Filtrować',
	'talk_filter_error' => 'Błąd filtrowania',
	'talk_filter_error_date_format' => 'Nie prawidłowy format daty',
	'talk_filter_result_count' => 'Znalezione %%count%% wiadomości',
	'talk_filter_result_empty' => 'Nie znaleziono wiadomości',
	
	'talk_user_in_blacklist' => 'Użytkownik <b>%%login%%</b> nie będzie dostawał od ciebie wiadomości',
	'talk_blacklist_title' => 'Nie dostawać wiadomości od:',
	'talk_blacklist_empty' => 'Dostawać od wszystkich',
	'talk_balcklist_add_label' => 'Dodać użytkowników',
	'talk_balcklist_add_notice' => 'Wprowadź jeden lub kilka loginów',
	'talk_balcklist_add_submit' => 'Ne dostawać',
	'talk_blacklist_add_ok' => 'Użytkownik <b>%%login%%</b> został dodany',
	'talk_blacklist_user_already_have' => 'Użytkownik <b>%%login%%</b> znajduje się w czarnej liście',
	'talk_blacklist_delete_ok' => 'Użytkownik <b>%%login%%</b> został usunięty',
	'talk_blacklist_user_not_found' => 'Użytkownika <b>%%login%%</b> nie ma w czarnej liście',
	'talk_blacklist_add_self' => 'Nie da się dodać siebie do czarnej listy',
	
	'talk_speaker_title' => 'Uczestnik rozmowy',
	'talk_speaker_add_label' => 'Dodać użytkownika',
	'talk_speaker_delete_ok' => 'Użytkownik <b>%%login%%</b> został usunięty',
	'talk_speaker_user_not_found' => 'Użytkownik <b>%%login%%</b> nie bierzę udział w rozmowie',
	'talk_speaker_user_already_exist' => ' <b>%%login%%</b> już uczastniczy w rozmowie',
	'talk_speaker_add_ok' => 'Użytkownik <b>%%login%%</b> został dodany',
	'talk_speaker_delete_by_self' => 'Użytkownik <b>%%login%%</b> usunął tą rozmowę',
	'talk_speaker_add_self' => 'Nie możesz dodać sam siebie',
	
	'talk_not_found' => 'Nie znaleziono rozmowy',
	
	/**
	 * Рейтинг TOP
	 */
	'top' => 'Ranking',
	'top_blogs' => 'TOP projektów',
	'top_topics' => 'TOP sugestii',
	'top_comments' => 'TOP komentarzy',
	
	/**
	 * Поиск по тегам
	 */
	'tag_title' => 'Szukaj według tagów',
	
	/**
	 * Постраничность
	 */
	'paging_next' => 'nasepna',
	'paging_previos' => 'poprzednia',
	'paging_last' => 'ostatnia',
	'paging_first' => 'pierwsza',
	'paging' => 'Strony',
	
	/**
	 * Загрузка изображений
	 */
	'uploadimg' => 'Wstawianie obrazu',
	'uploadimg_file' => 'Plik',
	'uploadimg_file_error' => 'Błąd przerobiania obrazu, spradż typ i rodzaj',
	'uploadimg_url' => 'URL obrazu',
	'uploadimg_url_error_type' => 'Plik nie jest obrazem',
	'uploadimg_url_error_read' => 'Nie da się odczytać plik',
	'uploadimg_url_error_size' => 'Rozmiar pliku przekracza maksymalnie dopuszczony',
	'uploadimg_url_error' => 'Błąd przerobiania obrazu',
	'uploadimg_align' => 'Wyrównanie',
	'uploadimg_align_no' => 'nie ma',
	'uploadimg_align_left' => 'po lewej',
	'uploadimg_align_right' => 'po prawej',
	'uploadimg_submit' => 'Załaduj',
	'uploadimg_cancel' => 'Anuluj',
	'uploadimg_title' => 'Оpis',
	
	/**
	 * Уведомления
	 */
	'notify_subject_comment_new' => 'Do twojej sugestii został dodany nowy komentarz',
	'notify_subject_comment_reply' => 'Została dodana odpowiedź na twój komentarz',
	'notify_subject_topic_new' => 'Nowa sugestia w projekcie',
	'notify_subject_registration_activate' => 'Rejestracja',
	'notify_subject_registration' => 'Rejestracja',
	'notify_subject_invite' => 'Zaproszenie do rejestracji',
	'notify_subject_talk_new' => 'Masz nową wiadomość',
	'notify_subject_talk_comment_new' => 'Masz nowy komentarz do wiadomości',
	'notify_subject_user_friend_new' => 'Masz nowego przyjaciela',
	'notify_subject_blog_invite_new' => 'Zaproszenie uczestniczyć w projekcie',
	'notify_subject_reminder_code' => 'Przywrócenie hasła',
	'notify_subject_reminder_password' => 'Nowe hasło',
	
	/**
	 * Страница администрирования плагинов
	 */
	'plugins_administartion_title' => 'Администрирование плагинов',
	'plugins_plugin_name' => 'Название',
	'plugins_plugin_author' => 'Автор',
	'plugins_plugin_version' => 'Версия',
	'plugins_plugin_action' => '',
	'plugins_plugin_activate' => 'Активировать',
	'plugins_plugin_deactivate' => 'Деактивировать',
	'plugins_unknown_action' => 'Указано неизвестное действие',
	'plugins_action_ok' => 'Успешно выполнено',
	'plugins_activation_overlap' => 'Конфликт с активированным плагином. Ресурс %%resource%% переопределен на %%delegate%% плагином %%plugin%%.',
	'plugins_activation_overlap_inherit' => 'Конфликт с активированным плагином. Ресурс %%resource%% используется как наследник в плагине %%plugin%%.',
	'plugins_activation_file_not_found' => 'Файл плагина не найден',
	'plugins_activation_version_error' => 'Для работы плагина необходимо ядро LiveStreet версии не ниже %%version%%',
	'plugins_activation_requires_error' => 'Для работы плагина необходим активированный плагин <b>%%plugin%%</b>',
	'plugins_submit_delete' => 'Удалить плагины',
	'plugins_delete_confirm' => 'Вы уверены, что желаете удалить указанные плагины?',
	
	
	'system_error_event_args' => 'Некорректное число аргументов при добавлении евента',
	'system_error_event_method' => 'Добавляемый метод евента не найден',
	'system_error_404' => 'К сожалению, такой страницы не существует. Вероятно, она была удалена с сервера, либо ее здесь никогда не было.',
	'system_error_module' => 'Не найден класс модуля',
	'system_error_module_no_method' => 'В модуле нет необходимого метода',
	'system_error_cache_type' => 'Неверный тип кеширования',
	'system_error_template' => 'Не найден шаблон',
	'system_error_template_block' => 'Не найден шаблон подключаемого блока',
	
	'error' => 'Błąd',
	'attention' => 'Uwaga',
	'system_error' => 'Błąd systemowy, spróbuj poźniej',
	'exit' => 'wyjscie',
	'need_authorization' => 'Musisz zalogować się!',
	'or' => 'lub',
	'window_close' => 'zamknij',
	'not_access' => 'Nie ma dostępu',	
	'install_directory_exists' => 'Для работы с сайтом удалите директорию /install.',	
	'login' => 'Wyjscię do strony',	
	'date_day' => 'dzień',
	'date_month' => 'miesiąc',
	
	'month_array' => array(
		1=>array('styczeń','stycznia','styczniu'),
		2=>array('luty','lutego','lutym'),
		3=>array('marzec','marca','marcu'),
		4=>array('kwiecień','kwietnia','kwietniu'),
		5=>array('maj','maja','maju'),
		6=>array('czerwiec','czerwcu','czerwca'),
		7=>array('lipiec','lipca','lipcu'),
		8=>array('sierpień','sierpnia','serpniu'),
		9=>array('wrzesień','września','wrześniu'),
		10=>array('październik','pażdziernika','październiku'),
		11=>array('listopad','listopada','listopadzie'),
		12=>array('grudzień','grudnia','grudniu'),	
	),
 	
	'date_year' => 'rok',
	
	'date_now' => 'Teraz',
	'date_today' => 'Dzisiaj w ',
	'date_yesterday' => 'Wczoraj w',
	'date_tomorrow' => 'Jutro w',
	'date_minutes_back' => '%%minutes%% minuta temu; %%minutes%% minuty temu; %%minutes%% minut temu',
	'date_minutes_back_less' => 'Mniej niż minutę temu',
	'date_hours_back' => '%%hours%% godzinę temu; %%hours%% godziny temu; %%hours%% godzin temu',
	'date_hours_back_less' => 'Mniej niż godzinę temu',
	'status_planned' => 'zaplanowane',
);

?>