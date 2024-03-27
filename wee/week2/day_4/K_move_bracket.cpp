#include <bits/stdc++.h>
using namespace std;
#define ll long long int
void solve()
{
  queue<char>q;
  vector<char>v;
  int n;
  cin>>n;
  string s;
  cin>>s;
  for(int i=0;i<n;i++){
    if(s[i]=='(') q.push(s[i]);
    else if(s[i]==')' && !q.empty()){
       q.pop();
    }
    else{
      v.push_back(s[i]);
    }
  }
  cout<<v.size()<<endl;


}
int main(){

  int t;
  cin>>t;
  while(t--)
  {

    solve();
  }


}