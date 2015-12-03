<?php /* This is a PHP data file */ if (!@$LOADSTRUCT) { die("This is not a program file."); }
return array (
  '_detailPage' => '',
  '_disableAdd' => '0',
  '_disableErase' => '0',
  '_disableModify' => '0',
  '_disablePreview' => '0',
  '_disableView' => '1',
  '_filenameFields' => 'unit',
  '_hideRecordsFromDisabledAccounts' => '0',
  '_indent' => '0',
  '_listPage' => '',
  '_maxRecords' => '',
  '_maxRecordsPerUser' => '',
  '_perPageDefault' => '25',
  '_previewPage' => '',
  '_requiredPlugins' => '',
  '_tableName' => 'haddonfield_availabilites',
  'listPageFields' => 'dragSortOrder, unit',
  'listPageOrder' => 'dragSortOrder DESC',
  'listPageSearchFields' => '_all_',
  'menuHidden' => '0',
  'menuName' => 'Haddonfield Availabilites',
  'menuOrder' => '0000000143',
  'menuType' => 'multi',
  'num' => array(
    'order' => 1,
    'type' => 'none',
    'label' => 'Record Number',
    'isSystemField' => '1',
  ),
  'createdDate' => array(
    'order' => 2,
    'type' => 'none',
    'label' => 'Created',
    'isSystemField' => '1',
  ),
  'createdByUserNum' => array(
    'order' => 3,
    'type' => 'none',
    'label' => 'Created By',
    'isSystemField' => '1',
  ),
  'updatedDate' => array(
    'order' => 4,
    'type' => 'none',
    'label' => 'Last Updated',
    'isSystemField' => '1',
  ),
  'updatedByUserNum' => array(
    'order' => 5,
    'type' => 'none',
    'label' => 'Last Updated By',
    'isSystemField' => '1',
  ),
  'dragSortOrder' => array(
    'order' => 6,
    'label' => 'Order',
    'type' => 'none',
  ),
  'unit' => array(
    'order' => '7',
    'label' => 'Unit',
    'type' => 'list',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '1',
    'isUnique' => '0',
    'listType' => 'pulldown',
    'optionsType' => 'text',
    'optionsText' => '100|Suite 100
1|Suite 1
2|Suite 2
3|Suite 3
4|Suite 4
5|Suite 5
6|Suite 6
7|Suite 7
8|Suite 8
9|Suite 9
10|Suite 10
11|Suite 11
12|Suite 12
13|Suite 13
14|Suite 14
15|Suite 15
16|Suite 16
17|Suite 17
18|Suite 18
19|Suite 19
20|Suite 20
21|Suite 21
22|Suite 22
23|Suite 23
24|Suite 24
25|Suite 25
26|Suite 26
27|Suite 27
28|Suite 28
29|Suite 29
30|Suite 30
31|Suite 31
32|Suite 32
33|Suite 33
34|Suite 34
35|Suite 35
36|Suite 36
37|Suite 37
38|Suite 38
39|Suite 39
40|Suite 40
41|Suite 41
42|Suite 42
43|Suite 43
44|Suite 44
45|Suite 45
46|Suite 46
47|Suite 47
48|Suite 48
49|Suite 49
50|Suite 50
51|Suite 51
52|Suite 52
53|Suite 53
54|Suite 54
55|Suite 55
56|Suite 56
57|Suite 57
58|Suite 58
59|Suite 59
60|Suite 60
61|Suite 61
62|Suite 62
63|Suite 63
64|Suite 64
65|Suite 65
66|Suite 66
67|Suite 67
68|Suite 68
69|Suite 69
70|Suite 70
71|Suite 71
72|Suite 72
73|Suite 73
74|Suite 74
75|Suite 75
76|Suite 76
77|Suite 77
78|Suite 78
79|Suite 79
80|Suite 80
81|Suite 81
82|Suite 82
83|Suite 83
84|Suite 84
85|Suite 85
86|Suite 86
87|Suite 87
88|Suite 88
89|Suite 89
90|Suite 90
91|Suite 91
92|Suite 92
93|Suite 93
94|Suite 94
95|Suite 95
96|Suite 96
97|Suite 97
98|Suite 98
99|Suite 99
100|Suite 100
101|Suite 101
102|Suite 102
103|Suite 103
104|Suite 104
105|Suite 105
106|Suite 106
107|Suite 107
108|Suite 108
109|Suite 109
110|Suite 110
111|Suite 111
112|Suite 112
113|Suite 113
114|Suite 114
115|Suite 115
116|Suite 116
117|Suite 117
118|Suite 118
119|Suite 119
120|Suite 120
121|Suite 121
122|Suite 122
123|Suite 123
124|Suite 124
125|Suite 125
126|Suite 126
127|Suite 127
128|Suite 128
129|Suite 129
130|Suite 130
131|Suite 131
132|Suite 132
133|Suite 133
134|Suite 134
135|Suite 135
136|Suite 136
137|Suite 137
138|Suite 138
139|Suite 139
140|Suite 140
141|Suite 141
142|Suite 142
143|Suite 143
144|Suite 144
145|Suite 145
146|Suite 146
147|Suite 147
148|Suite 148
149|Suite 149
150|Suite 150
151|Suite 151
152|Suite 152
153|Suite 153
154|Suite 154
155|Suite 155
156|Suite 156
157|Suite 157
158|Suite 158
159|Suite 159
160|Suite 160
161|Suite 161
162|Suite 162
163|Suite 163
164|Suite 164
165|Suite 165
166|Suite 166
167|Suite 167
168|Suite 168
169|Suite 169
170|Suite 170
171|Suite 171
172|Suite 172
173|Suite 173
174|Suite 174
175|Suite 175
176|Suite 176
177|Suite 177
178|Suite 178
179|Suite 179
180|Suite 180
181|Suite 181
182|Suite 182
183|Suite 183
184|Suite 184
185|Suite 185
186|Suite 186
187|Suite 187
188|Suite 188
189|Suite 189
190|Suite 190
191|Suite 191
192|Suite 192
193|Suite 193
194|Suite 194
195|Suite 195
196|Suite 196
197|Suite 197
198|Suite 198
199|Suite 199
200|Suite 200
201|Suite 201
202|Suite 202
203|Suite 203
204|Suite 204
205|Suite 205
206|Suite 206
207|Suite 207
208|Suite 208
209|Suite 209
210|Suite 210
211|Suite 211
212|Suite 212
213|Suite 213
214|Suite 214
215|Suite 215
216|Suite 216
217|Suite 217
218|Suite 218
219|Suite 219
220|Suite 220
221|Suite 221
222|Suite 222
223|Suite 223
224|Suite 224
225|Suite 225
226|Suite 226
227|Suite 227
228|Suite 228
229|Suite 229
230|Suite 230
231|Suite 231
232|Suite 232
233|Suite 233
234|Suite 234
235|Suite 235
236|Suite 236
237|Suite 237
238|Suite 238
239|Suite 239
240|Suite 240
241|Suite 241
242|Suite 242
243|Suite 243
244|Suite 244
245|Suite 245
246|Suite 246
247|Suite 247
248|Suite 248
249|Suite 249
250|Suite 250
251|Suite 251
252|Suite 252
253|Suite 253
254|Suite 254
255|Suite 255
256|Suite 256
257|Suite 257
258|Suite 258
259|Suite 259
260|Suite 260
261|Suite 261
262|Suite 262
263|Suite 263
264|Suite 264
265|Suite 265
266|Suite 266
267|Suite 267
268|Suite 268
269|Suite 269
270|Suite 270
271|Suite 271
272|Suite 272
273|Suite 273
274|Suite 274
275|Suite 275
276|Suite 276
277|Suite 277
278|Suite 278
279|Suite 279
280|Suite 280
281|Suite 281
282|Suite 282
283|Suite 283
284|Suite 284
285|Suite 285
286|Suite 286
287|Suite 287
288|Suite 288
289|Suite 289
290|Suite 290
291|Suite 291
292|Suite 292
293|Suite 293
294|Suite 294
295|Suite 295
296|Suite 296
297|Suite 297
298|Suite 298
299|Suite 299
300|Suite 300
301|Suite 301
302|Suite 302
303|Suite 303
304|Suite 304
305|Suite 305
306|Suite 306
307|Suite 307
308|Suite 308
309|Suite 309
310|Suite 310
311|Suite 311
312|Suite 312
313|Suite 313
314|Suite 314
315|Suite 315
316|Suite 316
317|Suite 317
318|Suite 318
319|Suite 319
320|Suite 320
321|Suite 321
322|Suite 322
323|Suite 323
324|Suite 324
325|Suite 325
326|Suite 326
327|Suite 327
328|Suite 328
329|Suite 329
330|Suite 330
331|Suite 331
332|Suite 332
333|Suite 333
334|Suite 334
335|Suite 335
336|Suite 336
337|Suite 337
338|Suite 338
339|Suite 339
340|Suite 340
341|Suite 341
342|Suite 342
343|Suite 343
344|Suite 344
345|Suite 345
346|Suite 346
347|Suite 347
348|Suite 348
349|Suite 349
350|Suite 350
351|Suite 351
352|Suite 352
353|Suite 353
354|Suite 354
355|Suite 355
356|Suite 356
357|Suite 357
358|Suite 358
359|Suite 359
360|Suite 360
361|Suite 361
362|Suite 362
363|Suite 363
364|Suite 364
365|Suite 365
366|Suite 366
367|Suite 367
368|Suite 368
369|Suite 369
370|Suite 370
371|Suite 371
372|Suite 372
373|Suite 373
374|Suite 374
375|Suite 375
376|Suite 376
377|Suite 377
378|Suite 378
379|Suite 379
380|Suite 380
381|Suite 381
382|Suite 382
383|Suite 383
384|Suite 384
385|Suite 385
386|Suite 386
387|Suite 387
388|Suite 388
389|Suite 389
390|Suite 390
391|Suite 391
392|Suite 392
393|Suite 393
394|Suite 394
395|Suite 395
396|Suite 396
397|Suite 397
398|Suite 398
399|Suite 399
400|Suite 400',
  ),
  'description' => array(
    'order' => 8,
    'label' => 'Description',
    'type' => 'wysiwyg',
    'fieldPrefix' => '',
    'description' => '',
    'defaultContent' => '',
    'allowUploads' => '1',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '300',
    'allowedExtensions' => 'gif,jpg,png,wmv,mov,swf',
    'checkMaxUploadSize' => '1',
    'maxUploadSizeKB' => '5120',
    'checkMaxUploads' => '1',
    'maxUploads' => '25',
    'resizeOversizedImages' => '1',
    'maxImageHeight' => '800',
    'maxImageWidth' => '600',
    'createThumbnails' => '1',
    'maxThumbnailHeight' => '150',
    'maxThumbnailWidth' => '150',
    'createThumbnails2' => '0',
    'maxThumbnailHeight2' => '150',
    'maxThumbnailWidth2' => '150',
    'createThumbnails3' => '0',
    'maxThumbnailHeight3' => '150',
    'maxThumbnailWidth3' => '150',
    'createThumbnails4' => '0',
    'maxThumbnailHeight4' => '150',
    'maxThumbnailWidth4' => '150',
    'useCustomUploadDir' => '0',
    'customUploadDir' => '',
    'customUploadUrl' => '',
  ),
  'comments' => array(
    'order' => 9,
    'label' => 'Comments',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'square_feet' => array(
    'order' => 10,
    'label' => 'Square Feet',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'price_rsf' => array(
    'order' => 11,
    'label' => 'Price/RSF',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'purchase_price' => array(
    'order' => 12,
    'label' => 'Purchase Price',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'floorplan' => array(
    'order' => 13,
    'label' => 'Floorplan',
    'type' => 'upload',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'allowedExtensions' => 'gif,jpg,png,wmv,mov,swf,pdf',
    'checkMaxUploadSize' => '1',
    'maxUploadSizeKB' => '5120',
    'checkMaxUploads' => '1',
    'maxUploads' => '25',
    'resizeOversizedImages' => '1',
    'maxImageHeight' => '800',
    'maxImageWidth' => '600',
    'createThumbnails' => '1',
    'maxThumbnailHeight' => '150',
    'maxThumbnailWidth' => '150',
    'createThumbnails2' => '0',
    'maxThumbnailHeight2' => '150',
    'maxThumbnailWidth2' => '150',
    'createThumbnails3' => '0',
    'maxThumbnailHeight3' => '150',
    'maxThumbnailWidth3' => '150',
    'createThumbnails4' => '0',
    'maxThumbnailHeight4' => '150',
    'maxThumbnailWidth4' => '150',
    'useCustomUploadDir' => '0',
    'customUploadDir' => '',
    'customUploadUrl' => '',
    'infoField1' => 'Title',
    'infoField2' => 'Caption',
    'infoField3' => '',
    'infoField4' => '',
    'infoField5' => '',
  ),
  'image' => array(
    'order' => 14,
    'label' => 'Image',
    'type' => 'upload',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'allowedExtensions' => 'gif,jpg,png,wmv,mov,swf,pdf',
    'checkMaxUploadSize' => '1',
    'maxUploadSizeKB' => '5120',
    'checkMaxUploads' => '1',
    'maxUploads' => '25',
    'resizeOversizedImages' => '1',
    'maxImageHeight' => '800',
    'maxImageWidth' => '600',
    'createThumbnails' => '1',
    'maxThumbnailHeight' => '150',
    'maxThumbnailWidth' => '150',
    'createThumbnails2' => '0',
    'maxThumbnailHeight2' => '150',
    'maxThumbnailWidth2' => '150',
    'createThumbnails3' => '0',
    'maxThumbnailHeight3' => '150',
    'maxThumbnailWidth3' => '150',
    'createThumbnails4' => '0',
    'maxThumbnailHeight4' => '150',
    'maxThumbnailWidth4' => '150',
    'useCustomUploadDir' => '0',
    'customUploadDir' => '',
    'customUploadUrl' => '',
    'infoField1' => 'Title',
    'infoField2' => 'Caption',
    'infoField3' => '',
    'infoField4' => '',
    'infoField5' => '',
  ),
);
?>