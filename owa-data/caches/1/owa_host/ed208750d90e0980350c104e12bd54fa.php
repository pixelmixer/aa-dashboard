<?php\n/*Tzo4OiJvd2FfaG9zdCI6NTp7czo0OiJuYW1lIjtzOjk6ImJhc2UuaG9zdCI7czoxMDoicHJvcGVydGllcyI7YTo4OntzOjI6ImlkIjtPOjEyOiJvd2FfZGJDb2x1bW4iOjExOntzOjQ6Im5hbWUiO047czo1OiJ2YWx1ZSI7aTozMzAzNTM4MzU7czo5OiJkYXRhX3R5cGUiO3M6NjoiQklHSU5UIjtzOjExOiJmb3JpZWduX2tleSI7TjtzOjE0OiJpc19wcmltYXJ5X2tleSI7YjoxO3M6MTQ6ImF1dG9faW5jcmVtZW50IjtiOjA7czo5OiJpc191bmlxdWUiO2I6MDtzOjExOiJpc19ub3RfbnVsbCI7YjowO3M6NToibGFiZWwiO047czo1OiJpbmRleCI7TjtzOjEzOiJkZWZhdWx0X3ZhbHVlIjtOO31zOjEwOiJpcF9hZGRyZXNzIjtPOjEyOiJvd2FfZGJDb2x1bW4iOjExOntzOjQ6Im5hbWUiO047czo1OiJ2YWx1ZSI7czoxMzoiNzIuMTM2Ljg1LjE0NCI7czo5OiJkYXRhX3R5cGUiO3M6MTI6IlZBUkNIQVIoMjU1KSI7czoxMToiZm9yaWVnbl9rZXkiO047czoxNDoiaXNfcHJpbWFyeV9rZXkiO2I6MDtzOjE0OiJhdXRvX2luY3JlbWVudCI7YjowO3M6OToiaXNfdW5pcXVlIjtiOjA7czoxMToiaXNfbm90X251bGwiO2I6MDtzOjU6ImxhYmVsIjtOO3M6NToiaW5kZXgiO047czoxMzoiZGVmYXVsdF92YWx1ZSI7Tjt9czo0OiJob3N0IjtPOjEyOiJvd2FfZGJDb2x1bW4iOjExOntzOjQ6Im5hbWUiO047czo1OiJ2YWx1ZSI7czo3OiJmaWRvLmNhIjtzOjk6ImRhdGFfdHlwZSI7czoxMjoiVkFSQ0hBUigyNTUpIjtzOjExOiJmb3JpZWduX2tleSI7TjtzOjE0OiJpc19wcmltYXJ5X2tleSI7YjowO3M6MTQ6ImF1dG9faW5jcmVtZW50IjtiOjA7czo5OiJpc191bmlxdWUiO2I6MDtzOjExOiJpc19ub3RfbnVsbCI7YjowO3M6NToibGFiZWwiO047czo1OiJpbmRleCI7TjtzOjEzOiJkZWZhdWx0X3ZhbHVlIjtOO31zOjk6ImZ1bGxfaG9zdCI7TzoxMjoib3dhX2RiQ29sdW1uIjoxMTp7czo0OiJuYW1lIjtOO3M6NToidmFsdWUiO3M6NDY6IkNQRTg0OTQ4Y2QxOWM5My1DTTg0OTQ4Y2QxOWM5MC5jcGUubmV0LmZpZG8uY2EiO3M6OToiZGF0YV90eXBlIjtzOjEyOiJWQVJDSEFSKDI1NSkiO3M6MTE6ImZvcmllZ25fa2V5IjtOO3M6MTQ6ImlzX3ByaW1hcnlfa2V5IjtiOjA7czoxNDoiYXV0b19pbmNyZW1lbnQiO2I6MDtzOjk6ImlzX3VuaXF1ZSI7YjowO3M6MTE6ImlzX25vdF9udWxsIjtiOjA7czo1OiJsYWJlbCI7TjtzOjU6ImluZGV4IjtOO3M6MTM6ImRlZmF1bHRfdmFsdWUiO047fXM6NDoiY2l0eSI7TzoxMjoib3dhX2RiQ29sdW1uIjoxMTp7czo0OiJuYW1lIjtOO3M6NToidmFsdWUiO3M6OToiKG5vdCBzZXQpIjtzOjk6ImRhdGFfdHlwZSI7czoxMjoiVkFSQ0hBUigyNTUpIjtzOjExOiJmb3JpZWduX2tleSI7TjtzOjE0OiJpc19wcmltYXJ5X2tleSI7YjowO3M6MTQ6ImF1dG9faW5jcmVtZW50IjtiOjA7czo5OiJpc191bmlxdWUiO2I6MDtzOjExOiJpc19ub3RfbnVsbCI7YjowO3M6NToibGFiZWwiO047czo1OiJpbmRleCI7TjtzOjEzOiJkZWZhdWx0X3ZhbHVlIjtOO31zOjc6ImNvdW50cnkiO086MTI6Im93YV9kYkNvbHVtbiI6MTE6e3M6NDoibmFtZSI7TjtzOjU6InZhbHVlIjtzOjk6Iihub3Qgc2V0KSI7czo5OiJkYXRhX3R5cGUiO3M6MTI6IlZBUkNIQVIoMjU1KSI7czoxMToiZm9yaWVnbl9rZXkiO047czoxNDoiaXNfcHJpbWFyeV9rZXkiO2I6MDtzOjE0OiJhdXRvX2luY3JlbWVudCI7YjowO3M6OToiaXNfdW5pcXVlIjtiOjA7czoxMToiaXNfbm90X251bGwiO2I6MDtzOjU6ImxhYmVsIjtOO3M6NToiaW5kZXgiO047czoxMzoiZGVmYXVsdF92YWx1ZSI7Tjt9czo4OiJsYXRpdHVkZSI7TzoxMjoib3dhX2RiQ29sdW1uIjoxMTp7czo0OiJuYW1lIjtOO3M6NToidmFsdWUiO3M6OToiKG5vdCBzZXQpIjtzOjk6ImRhdGFfdHlwZSI7czoxMjoiVkFSQ0hBUigyNTUpIjtzOjExOiJmb3JpZWduX2tleSI7TjtzOjE0OiJpc19wcmltYXJ5X2tleSI7YjowO3M6MTQ6ImF1dG9faW5jcmVtZW50IjtiOjA7czo5OiJpc191bmlxdWUiO2I6MDtzOjExOiJpc19ub3RfbnVsbCI7YjowO3M6NToibGFiZWwiO047czo1OiJpbmRleCI7TjtzOjEzOiJkZWZhdWx0X3ZhbHVlIjtOO31zOjk6ImxvbmdpdHVkZSI7TzoxMjoib3dhX2RiQ29sdW1uIjoxMTp7czo0OiJuYW1lIjtOO3M6NToidmFsdWUiO3M6OToiKG5vdCBzZXQpIjtzOjk6ImRhdGFfdHlwZSI7czoxMjoiVkFSQ0hBUigyNTUpIjtzOjExOiJmb3JpZWduX2tleSI7TjtzOjE0OiJpc19wcmltYXJ5X2tleSI7YjowO3M6MTQ6ImF1dG9faW5jcmVtZW50IjtiOjA7czo5OiJpc191bmlxdWUiO2I6MDtzOjExOiJpc19ub3RfbnVsbCI7YjowO3M6NToibGFiZWwiO047czo1OiJpbmRleCI7TjtzOjEzOiJkZWZhdWx0X3ZhbHVlIjtOO319czoxNjoiX3RhYmxlUHJvcGVydGllcyI7YTo0OntzOjU6ImFsaWFzIjtzOjQ6Imhvc3QiO3M6NDoibmFtZSI7czo4OiJvd2FfaG9zdCI7czo5OiJjYWNoZWFibGUiO2I6MTtzOjIzOiJjYWNoZV9leHBpcmF0aW9uX3BlcmlvZCI7aTo2MDQ4MDA7fXM6MTI6Indhc1BlcnNpc3RlZCI7TjtzOjU6ImNhY2hlIjtOO30=*/\n?>