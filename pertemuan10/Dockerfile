FROM php:8.1-apache

# Salin semua file ke direktori kerja di dalam container
COPY . /var/www/html/

# (Opsional) Aktifkan modul PHP tambahan jika diperlukan
RUN docker-php-ext-install mysqli

# Ubah permission jika perlu
RUN chown -R www-data:www-data /var/www/html/
